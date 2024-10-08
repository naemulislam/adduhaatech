<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminRequest extends FormRequest
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
        //$email = 'required|email|unique:users,email';
        $password = 'required|min:8|required_with:password_confirmation|same:password_confirmation';
        $confirmPassword = 'required|min:8';
        if (request()->isMethod('put')) {
            $password = 'nullable|min:8|required_with:password_confirmation|same:password_confirmation';
            $confirmPassword = 'nullable|min:8';
            $userId = $this->route('user');
            //$email= Rule::unique('users', 'email')->ignore($userId ?? null);
        }
        return [
            'name' => 'required|string',
            'role' => 'required|in:admin,editor,manager,author',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($userId ?? null),
            ],
            'mobile' => 'required',
            'address' => 'nullable|string',
            'password' =>  $password,
            'password_confirmation' => $confirmPassword,
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ];
    }
}
