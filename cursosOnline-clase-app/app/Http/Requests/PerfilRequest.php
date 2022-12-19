<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PerfilRequest extends FormRequest
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
            'nombre' => 'required|min:2|max:20',
            'apellido1' => 'required|min:2|max:20',
            'apellido2' => 'min:0|max:20',
            'observaciones' => 'min:0',
            'direccion' => 'min:0|max:200',
            'telefono' => 'min:0|max:15',
            'user_id' => [
                'required','min:1',
                /*Rule::unique('perfils','user_id')->ignore($this->perfil)*/], //ESTE CAMPO ÚNICO TODO -> Rule::unique('perfils','user_id')->ignore($this->perfil)
            ];
    }

    # Podemos redefinir los atributos
    public function attributes()
    {
        return [
            'user_id' => 'usuario'
        ];
    }

    # Podemos redefinir los mensajes de validación
    public function messages()
    {
        return [
            'user_id.unique' => 'El usuario indicado ya fue asignado',
         ];
    }
}
