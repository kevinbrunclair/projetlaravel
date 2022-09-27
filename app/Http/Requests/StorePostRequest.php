<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Le nom du produit est obligatoire',
            'name.string' => 'Le nom du produit doit être une chaîne de caractères',
            'name.max' => 'Le nom du produit ne doit pas dépasser 255 caractères',
            'price.required' => 'Le prix du produit est obligatoire',
            'price.numeric' => 'Le prix du produit doit être un nombre',
            'price.min' => 'Le prix du produit doit être supérieur à 0',
        ];
    }

}
