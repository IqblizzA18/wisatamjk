<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class WisataRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $wisataId = $this->route('wisata')?->id ?? null;

        return [
            'title' => 'required|string|max:255',
            'slug' => [
                'nullable',
                Rule::unique('wisatas', 'slug')->ignore($wisataId),
            ],
            'short_description' => 'nullable|string|max:255',
            'paragraph_1' => 'nullable|string',
            'paragraph_2' => 'nullable|string',
            'paragraph_3' => 'nullable|string',
            'paragraph_4' => 'nullable|string',
            'paragraph_5' => 'nullable|string',
            'google_maps_url' => 'nullable|url',
            'opening_hours' => 'nullable|string',
            'rating' => 'required|numeric|min:0|max:5', // ✅ digunakan untuk CBF
            'jenis_wisata_id' => 'required|exists:jenis_wisatas,id', // ✅ digunakan untuk CBF
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}
