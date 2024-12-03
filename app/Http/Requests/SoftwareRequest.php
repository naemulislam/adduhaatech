<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SoftwareRequest extends FormRequest
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
            'software_name' => 'required|string',
            'description' => 'required',
            'order' => 'required|numeric|unique:software,order',
            'thumbnail' => 'required|mimes:png,jpg,jpeg',
            'images' => 'nullable'
        ];
    }
}
