<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class JenisWisataRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        switch ($this->method()) {
            case 'POST':
                return [
                    'name' => 'required|string|max:255',
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'name' => 'required|string|max:255',
                ];
            default:
                return [];
        }
    }
}
