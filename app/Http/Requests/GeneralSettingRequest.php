<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralSettingRequest extends FormRequest
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
           'site_name' => 'required|string|max:150',
            'email' => 'required|email',
            'phone1' => 'required|min:11|max:11',
            'web_address' => 'nullable|string|max:100',
            'address' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:100',
            'youtube' => 'nullable|string|max:100',
            'twitter' => 'nullable|string|max:100',
            'instagram' => 'nullable|string|max:100',
            'linkedin' => 'nullable|string|max:100',
            'web_logo' => 'nullable|mimes:png,jpg,jpeg',
            'favicon' => 'nullable|mimes:png,jpg,jpeg',
            'm_title' => 'nullable|string',
            'm_description' => 'nullable|string',
            'm_keyword' => 'nullable|string',
        ];
    }
}
