<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpsertPageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => ['required', 'string', 'max:60', 'regex:/^[a-z0-9\-]+$/'],
            'title' => ['required', 'string', 'max:120'],
            'slug' => ['required', 'string', 'max:200'],
            'status' => ['required', 'in:draft,review,published'],
            'template' => ['required', 'string', 'max:60'],
            'publish_at' => ['nullable', 'date'],
            'unpublish_at' => ['nullable', 'date', 'after:publish_at'],
            'seo.title' => ['required', 'string', 'max:160'],
            'seo.description' => ['required', 'string', 'max:320'],
            'seo.og_title' => ['required', 'string', 'max:160'],
            'seo.og_description' => ['required', 'string', 'max:320'],
            'seo.focus_keywords' => ['nullable', 'string', 'max:255'],
        ];
    }
}
