<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutRequest extends FormRequest
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
            'npsn' => 'required', 'string', 'max:255',
            'akreditasi' => 'required', 'string', 'max:255',
            'no_sk_akreditasi' => 'required', 'string', 'max:255',
            'status_sk_akreditasi' => 'required', 'string', 'max:255',
            'jenjang_pendidikan' => 'required', 'string', 'max:255',
            'sk_pendirian' => 'required', 'string', 'max:255',
            'tgl_sk_pendirian' => 'required', 'string', 'max:255',
            'sk_operatsional' => 'required', 'string', 'max:255',
            'tgl_sk_operational' => 'required', 'string', 'max:255',
            'description' => 'required', 'string', 'max:255',
            'address' => 'required', 'string', 'max:255',
            'maps' => 'required', 'string', 'max:255',
            'jumlah_siswa' => 'required', 'string', 'max:255',
            'phone' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'max:255',
            'thumbnail' => 'required', 'image', 'mimes:png,jpg,jpeg,svg', 'max:10240'
        ];
    }
}