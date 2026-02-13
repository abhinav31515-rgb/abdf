<?php

namespace App\Support;

use RuntimeException;

class PageRepository
{
    public function all(string $brand): array
    {
        return $this->read($brand);
    }

    public function find(string $brand, string $id): ?array
    {
        foreach ($this->read($brand) as $page) {
            if (($page['id'] ?? null) === $id) {
                return $page;
            }
        }

        return null;
    }

    public function create(string $brand, array $payload): void
    {
        $pages = $this->read($brand);
        $pages[] = $payload;
        $this->write($brand, $pages);
    }

    public function update(string $brand, string $id, array $payload): void
    {
        $pages = $this->read($brand);

        foreach ($pages as $index => $page) {
            if (($page['id'] ?? null) === $id) {
                $pages[$index] = $payload;
                $this->write($brand, $pages);
                return;
            }
        }

        throw new RuntimeException('Page not found for update: '.$id);
    }

    public function delete(string $brand, string $id): void
    {
        $pages = array_values(array_filter(
            $this->read($brand),
            static fn (array $page): bool => ($page['id'] ?? null) !== $id
        ));

        $this->write($brand, $pages);
    }

    private function read(string $brand): array
    {
        $path = $this->path($brand);

        if (! is_file($path)) {
            file_put_contents($path, '[]');
        }

        $data = json_decode((string) file_get_contents($path), true);

        return is_array($data) ? $data : [];
    }

    private function write(string $brand, array $pages): void
    {
        file_put_contents($this->path($brand), json_encode($pages, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    private function path(string $brand): string
    {
        return base_path('storage/pages/'.$brand.'.json');
    }
}
