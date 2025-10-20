<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function messages()
    {
        return [
            'email.required' => 'Field email wajib diisi.',
            'email.email' => 'Tolong masukkan format email yang valid.',
            'email.max' => 'Email tidak boleh lebih dari 40 karakter.',
            'email.min' => 'Email harus terdiri dari minimal 2 karakter.',
            'password.required' => 'Field password wajib diisi.',
            'password.min' => 'Password harus terdiri dari minimal 8 karakter.',
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|max:40|min:2|',
            'password' => 'required|min:8',
        ];
    }
}
