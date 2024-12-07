<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
        $order = 'required|numeric|unique:services,order';
        if(request()->isMethod('put')) {
            $order = 'nullable';
        }

        return [
            'service_name' => 'required|string',
            'description' => 'required',
            'order' => $order,
            'thumbnail' => 'nullable|mimes:png,jpg,jpeg',
            'icon' =>'nullable|mimes:png,jpg,jpeg',
        ];
    }
}
