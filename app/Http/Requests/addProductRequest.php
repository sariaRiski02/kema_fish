<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;


class addProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::user()->role === 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            'name' => 'required|string|min:3|max:255',
            'entity_product' => 'required|string|min:0|max:255',
            'price' => 'required|numeric',
            'category' => 'required|exists:categories,id',
            'image' => 'nullable',
            'description' => 'nullable|string',
            'detail_description' => 'nullable|string'
        ];
    }

    public function failedValidation(Validator $validation)
    {
        return redirect()
            ->route('admin.create-product')
            ->withInput()
            ->withErrors($validation);
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama produk wajib diisi, jangan sampai kosong ya!',
            'name.text' => 'Nama produk harus berupa teks yang valid.',
            'name.min' => 'Nama produk minimal harus terdiri dari 3 karakter.',
            'name.max' => 'Nama produk maksimal terdiri dari 255 karakter.',
            'entity_product.required' => 'Entity produk wajib diisi, jangan sampai kosong ya!',
            'entity_product.text' => 'Entity produk harus berupa teks yang valid.',
            'entity_product.min' => 'Entity produk minimal harus terdiri dari 0 karakter.',
            'entity_product.max' => 'Entity produk maksimal terdiri dari 255 karakter.',
            'price.required' => 'Harga produk wajib diisi, jangan sampai kosong ya!',
            'price.numeric' => 'Harga produk harus berupa angka.',
            'category.required' => 'Kategori produk wajib diisi, jangan sampai kosong ya!',
            'category.exists' => 'Kategori yang dipilih tidak valid.',
            'image.text' => 'Gambar produk harus berupa teks yang valid.',
            'description.text' => 'Deskripsi produk harus berupa teks yang valid.',
            'detail_description.text' => 'Deskripsi detail produk harus berupa teks yang valid.',
        ];
    }
}
