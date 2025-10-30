<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCatalogRequest extends FormRequest
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
            'title' => 'required|string|max:50',
            'header' => 'required|image|mimes:jpg,jpeg,png',
            'excerpt' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:publish,draft',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul katalog wajib diisi.',
            'title.string' => 'Judul katalog harus berupa teks.',
            'title.max' => 'Judul katalog maksimal 50 karakter.',
            'header.required' => 'Gambar header wajib diupload.',
            'header.image' => 'File header harus berupa gambar.',
            'header.mimes' => 'Gambar header harus berformat jpg, jpeg, atau png.',
            'excerpt.required' => 'Excerpt katalog wajib diisi.',
            'excerpt.string' => 'Excerpt katalog harus berupa teks.',
            'description.required' => 'Deskripsi katalog wajib diisi.',
            'description.string' => 'Deskripsi katalog harus berupa teks.',
            'price.required' => 'Harga katalog wajib diisi.',
            'price.numeric' => 'Harga katalog harus berupa angka.',
            'price.min' => 'Harga katalog minimal 0.',
            'status.required' => 'Status katalog wajib dipilih.',
            'status.in' => 'Status katalog harus publish atau draft.',
        ];
    }
}
