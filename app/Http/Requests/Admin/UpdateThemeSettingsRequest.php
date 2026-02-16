<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateThemeSettingsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'brand.code' => ['required', 'string', 'max:20'],
            'brand.name' => ['required', 'string', 'max:100'],
            'brand.property_name' => ['required', 'string', 'max:150'],
            'brand.address' => ['required', 'string', 'max:255'],
            'brand.phone' => ['required', 'string', 'max:40'],
            'appearance.primary' => ['required', 'regex:/^#([A-Fa-f0-9]{6})$/'],
            'appearance.secondary' => ['required', 'regex:/^#([A-Fa-f0-9]{6})$/'],
            'appearance.surface' => ['required', 'regex:/^#([A-Fa-f0-9]{6})$/'],
            'appearance.header_style' => ['required', 'string', 'max:40'],
            'appearance.hero_overlay' => ['required', 'string', 'max:40'],

            'appearance.background' => ['nullable', 'regex:/^#([A-Fa-f0-9]{6})$/'],
            'appearance.text' => ['nullable', 'regex:/^#([A-Fa-f0-9]{6})$/'],
            'appearance.text_muted' => ['nullable', 'regex:/^#([A-Fa-f0-9]{6})$/'],
            'appearance.border' => ['nullable', 'regex:/^#([A-Fa-f0-9]{6})$/'],
            'appearance.admin_primary' => ['nullable', 'regex:/^#([A-Fa-f0-9]{6})$/'],
            'hero.eyebrow' => ['required', 'string', 'max:120'],
            'hero.title' => ['required', 'string', 'max:180'],
            'hero.subtitle' => ['required', 'string', 'max:400'],
            'hero.primary_cta.label' => ['required', 'string', 'max:80'],
            'hero.primary_cta.target' => ['required', 'string', 'max:80'],
            'hero.secondary_cta.label' => ['required', 'string', 'max:80'],
            'hero.secondary_cta.target' => ['required', 'string', 'max:80'],
            'menus' => ['required', 'array', 'min:1'],
            'menus.*.label' => ['required', 'string', 'max:60'],
            'menus.*.anchor' => ['required', 'string', 'max:120'],
        ];
    }
}
