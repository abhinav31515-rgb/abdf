<?php

namespace App\Support;

use RuntimeException;

class BrandThemeRepository
{
    public function get(string $brand = 'eros'): array
    {
        $path = $this->themePath($brand);

        if (! is_file($path)) {
            $path = $this->themePath('eros');
        }

        $decoded = json_decode((string) file_get_contents($path), true);

        if (! is_array($decoded)) {
            throw new RuntimeException('Theme JSON is invalid for brand: '.$brand);
        }

        return $decoded;
    }

    public function update(string $brand, array $payload): void
    {
        $path = $this->themePath($brand);
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
        return base_path('storage/themes');
    }
}
