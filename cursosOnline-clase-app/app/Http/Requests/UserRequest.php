<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
            'name' => [
                'required','min:4','max:255'
                ],
            'email' => [ 'required','email','max:255'
                ] //Validacion email
        ];
    }

    # Podemos redefinir los mensajes de validación
    public function messages()
    {
        return [
            'name.unique' => 'El nombre ya está dado de alta',
            'email.unique' => 'El email ya está dado de alta'
         ];
    }
}
