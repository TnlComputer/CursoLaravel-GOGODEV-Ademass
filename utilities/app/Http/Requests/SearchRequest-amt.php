<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min' => 3, 'max' => 255]
            // 'name' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.min' => 'El minimo son 3 caracteres',
            'name.max' => 'El maximo son 255 caracteres',
        ];
    }
}