<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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

    public function messages()
    {
        return [
            'name.required' => 'Field nama wajib diisi',
            'name.regex' => 'Nama hanya boleh berisi huruf dan spasi.',
            'name.max' => 'Nama tidak boleh lebih dari 50 karakter.',
            'name.min' => 'Nama harus terdiri dari minimal 2 karakter.',
            'email.required' => 'Field email wajib diisi.',
            'email.email' => 'Tolong masukkan format email yang valid.',
            'email.max' => 'Email tidak boleh lebih dari 40 karakter.',
            'email.min' => 'Email harus terdiri dari minimal 2 karakter.',
            'email.unique' => 'Email sudah terdaftar.',
            'phone.required' => 'Field nomor telepon wajib diisi.',
            'phone.digits_between' => 'Nomor telepon harus terdiri dari 12-13 digit.',
            'roles.in' => 'Role yang dipilih tidak valid.',
            'password.required' => 'Field password wajib diisi.',
            'password.min' => 'Password harus terdiri dari minimal 8 karakter.',
            'password.confirmed' => 'Password dan konfirmasi password tidak sesuai.',
            'password_confirmation.required' => 'Field konfirmasi password wajib diisi.',
            'password_confirmation.min' => 'Konfirmasi password harus terdiri dari minimal 8 karakter.',
        ];
    }

    public function rules(): array
    {
        return [
            'name' => 'required|regex:/^[a-zA-Z\s]+$/|max:50|min:2',
            'email' => 'required|email|max:40|min:2|unique:users',
            'phone' => 'required|digits_between:12,13',
            'roles' => 'in:admin,user',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ];
    }
}
