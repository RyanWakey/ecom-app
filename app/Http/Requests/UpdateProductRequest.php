<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => 'required|max:100', 
            'description' => 'max:250',
            'price' => 'required|numeric|regex:/^\d{1,8}(\.\d{1,2})?$/',
            'stock' => 'required|numeric|max:1000000',
            'imageUrl' => 'nullable|url',
            'category_id' => 'required|exists:categories,id'
        ];
    }
}
