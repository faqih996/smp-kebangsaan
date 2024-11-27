<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVisionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'string',
            'max:255',
            'missions' => 'array',  // Validasi untuk array missions
            'missions.*' => 'string',
            'mission' => 'array',  // Validasi untuk array mission
            'mission.*' => 'string',  // Validate each mission item
        ];
    }
}