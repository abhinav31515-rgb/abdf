<?php

namespace App\Support;

use InvalidArgumentException;
use RuntimeException;
use Illuminate\Support\Str;

class PageRepository
{
    public function all(string $brand): array
    {
        return $this->read($brand);
    }

    public function allWithSchedulingApplied(string $brand): array
    {
        $pages = $this->read($brand);
        $now = time();
        $changed = false;

        foreach ($pages as $index => $page) {
            $publishAt = isset($page['publish_at']) && $page['publish_at'] !== '' ? strtotime((string) $page['publish_at']) : null;
            $unpublishAt = isset($page['unpublish_at']) && $page['unpublish_at'] !== '' ? strtotime((string) $page['unpublish_at']) : null;

            if (($pages[$index]['status'] ?? 'draft') !== 'published' && $publishAt && $publishAt <= $now) {
                $pages[$index]['status'] = 'published';
                $changed = true;
            }

            if (($pages[$index]['status'] ?? 'draft') === 'published' && $unpublishAt && $unpublishAt <= $now) {
                $pages[$index]['status'] = 'draft';
                $changed = true;
            }
        }

        if ($changed) {
            $this->write($brand, $pages);
        }

        return $pages;
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

    public function clone(string $brand, string $id): string
    {
        $pages = $this->read($brand);

        foreach ($pages as $page) {
            if (($page['id'] ?? null) === $id) {
                $clone = $page;
                $clone['id'] = $this->nextCloneId($pages, (string) $id);
                $clone['title'] = ($page['title'] ?? 'Untitled').' (Copy)';
                $clone['slug'] = ($page['slug'] ?? '/') === '/' ? '/home-copy' : rtrim((string) ($page['slug'] ?? '/'), '/').'-copy';
                $clone['status'] = 'draft';
                $pages[] = $clone;
                $this->write($brand, $pages);

                return $clone['id'];
            }
        }

        throw new RuntimeException('Page not found for clone: '.$id);
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

    private function nextCloneId(array $pages, string $id): string
    {
        $candidate = $id.'-copy';
        $counter = 2;
        $existingIds = array_map(static fn (array $page): string => (string) ($page['id'] ?? ''), $pages);

        while (in_array($candidate, $existingIds, true)) {
            $candidate = $id.'-copy-'.$counter;
            $counter++;
        }

        return $candidate;
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
        $brand = $this->normalizeBrandKey($brand);

        return storage_path('pages/'.$brand.'.json');
    }

    private function normalizeBrandKey(string $brand): string
    {
        $brand = Str::lower(trim($brand));

        if (! preg_match('/^[a-z0-9\-]+$/', $brand)) {
            throw new InvalidArgumentException('Invalid brand key.');
        }

        return $brand;
    }
}
