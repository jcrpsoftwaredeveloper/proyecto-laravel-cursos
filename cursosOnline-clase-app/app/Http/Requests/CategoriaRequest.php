<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoriaRequest extends FormRequest
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
            'ref' => [
                'required','min:5','max:15',
                Rule::unique('categorias','ref')->ignore($this->categoria)],
            'titulo' => 'required|min:2|max:100',
            'descripcion' => 'required|min:1'
        ];
    }

    # Podemos redefinir los atributos
    public function attributes()
    {
        return [
            'ref' => 'referencia'
        ];
    }

    # Podemos redefinir los mensajes de validación
    public function messages()
    {
        return [
            'ref.unique' => 'La referencia indicada ya está dada de alta',
         ];
    }
}
