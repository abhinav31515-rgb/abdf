<?php

namespace App\Support;

use InvalidArgumentException;
use RuntimeException;
use Illuminate\Support\Str;

class BrandThemeRepository
{
    public function get(string $brand = 'eros'): array
    {
        $brand = $this->normalizeBrandKey($brand);
        $path = $this->themePath($brand);

        if (! is_file($path)) {
            $path = $this->themePath($this->defaultBrand());
        }

        $decoded = json_decode((string) file_get_contents($path), true);

        if (! is_array($decoded)) {
            throw new RuntimeException('Theme JSON is invalid for brand: '.$brand);
        }

        return $this->sanitizeTheme($decoded);
    }

    public function update(string $brand, array $payload): void
    {
        $brand = $this->normalizeBrandKey($brand);
        $path = $this->themePath($brand);
        $payload = $this->sanitizeTheme($payload);
        file_put_contents($path, json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    public function allBrands(): array
    {
        $brands = [];

        foreach (glob($this->themeDirectory().'/*.json') ?: [] as $file) {
            $key = pathinfo($file, PATHINFO_FILENAME);
            $data = json_decode((string) file_get_contents($file), true);
            $brands[$key] = $data['brand']['property_name'] ?? ucfirst($key);
        }

        return $brands;
    }

    private function themePath(string $brand): string
    {
        return $this->themeDirectory().'/'.$brand.'.json';
    }

    private function themeDirectory(): string
    {
        return storage_path('themes');
    }

    private function defaultBrand(): string
    {
        return (string) config('app.default_brand', 'eros');
    }

    private function normalizeBrandKey(string $brand): string
    {
        $brand = Str::lower(trim($brand));

        if (! preg_match('/^[a-z0-9\-]+$/', $brand)) {
            throw new InvalidArgumentException('Invalid brand key.');
        }

        return $brand;
    }

    private function sanitizeTheme(array $theme): array
    {
        $theme['appearance'] = array_merge([
            'primary' => '#b6945f',
            'secondary' => '#0f1217',
            'surface' => '#f5f2eb',
            'background' => '#f8f9fb',
            'text' => '#111827',
            'text_muted' => '#6b7280',
            'border' => '#e5e7eb',
            'admin_primary' => '#135bec',
            'header_style' => 'glass-dark',
            'hero_overlay' => 'dark-luxury',
            'font_family' => 'Inter, Arial, sans-serif',
            'radius' => '10px',
            'shadow' => '0 12px 30px rgba(15,18,23,.12)',
        ], $theme['appearance'] ?? []);

        if (isset($theme['hero']['primary_cta']['target'])) {
            $theme['hero']['primary_cta']['target'] = $this->sanitizeHref((string) $theme['hero']['primary_cta']['target']);
        }

        if (isset($theme['hero']['secondary_cta']['target'])) {
            $theme['hero']['secondary_cta']['target'] = $this->sanitizeHref((string) $theme['hero']['secondary_cta']['target']);
        }

        if (isset($theme['menus']) && is_array($theme['menus'])) {
            $theme['menus'] = array_values(array_filter($theme['menus'], static fn (array $menu): bool =>
                isset($menu['label'], $menu['anchor']) && trim((string) $menu['label']) !== '' && trim((string) $menu['anchor']) !== ''
            ));
        }

        return $theme;
    }

    private function sanitizeHref(string $href): string
    {
        $href = trim($href);

        if ($href === '' || Str::startsWith(Str::lower($href), ['javascript:', 'data:'])) {
            return '#';
        }

        if (Str::startsWith($href, ['#', '/']) || filter_var($href, FILTER_VALIDATE_URL)) {
            return $href;
        }

        return '#';
    }
}
