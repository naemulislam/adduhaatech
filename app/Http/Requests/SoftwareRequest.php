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
        $thumbnail = 'required|mimes:png,jpg,jpeg';
        $order = 'required|numeric|unique:software,order';
        if(request()->isMethod('put')){
            $thumbnail = 'nullable|mimes:png,jpg,jpeg';
            $uniqueId = request()->route('id');
            $order = 'required|numeric|unique:software,order,'.$uniqueId;
        }

        return [
            'software_name' => 'required|string',
            'description' => 'required',
            'order' => $order,
            'thumbnail' => $thumbnail,
            'images' => 'nullable'
        ];
    }
}
