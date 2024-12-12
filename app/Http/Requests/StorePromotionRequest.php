<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePromotionRequest extends FormRequest
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
            'title' => 'required', 'string', 'max:255',
            'subtitle' => 'required', 'string', 'max:255',
            'link' => 'required', 'string', 'max:255',
            'thumbnail' => 'required', 'image', 'mimes:png,jpg,jpeg,svg', 'max:10240',
            'path_video' => 'required', 'string', 'max:255',
            'benefit' => 'required|array|min:1',  // Make sure 'mission' is an array
            'benefit.*' => 'required|string|max:255',  // Validate each mission item
        ];
    }
}