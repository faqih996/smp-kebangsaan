<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
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
            'name' => 'required', 'string', 'max:255',
            'category_id' => 'required', 'integer',
            'is_featured' => 'required', 'string',
            'description' => 'required', 'string',
            'path_video' => 'required', 'string', 'max:255',
            'thumbnail1' => 'sometimes', 'image', 'mimes:png,jpg,jpeg,svg, , max:10240',
            'thumbnail2' => 'sometimes', 'image', 'mimes:png,jpg,jpeg,svg, max:10240',
            'thumbnail3' => 'sometimes', 'image', 'mimes:png,jpg,jpeg,svg, max:10240',
            'thumbnail4' => 'sometimes', 'image', 'mimes:png,jpg,jpeg,svg, max:10240',
            'thumbnail5' => 'sometimes', 'image', 'mimes:png,jpg,jpeg,svg, max:10240',
        ];
    }
}