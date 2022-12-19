<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El campo :attribute debe ser aceptado..',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'El campo :attribute no es una URL válida..',
    'after' => 'El campo :attribute debe ser una fecha posterior a :date',
    'after_or_equal' => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El campo :attribute solo puede contener letras',
    'alpha_dash' => 'El campo :attribute solo puede contener letras',
    'alpha_num' => 'El campo :attribute solo puede contener letras y números',
    'array' => 'El campo :attribute debe ser un array.',
    'before' => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El campo :attribute debe ser una fecha anterior a :date.',
    'between' => [
        'array'   => 'El campo :attribute debe contener entre :min y :max elementos.',
        'file' => 'El archivo :attribute debe pesar entre :min y :max kilobytes',
        'numeric' => 'El campo :attribute debe ser un valor entre :min y :max.',
        'string'  => 'El campo :attribute debe contener entre :min y :max caracteres.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'El campo confirmación de :attribute no coincide.',
    'current_password' => 'El password es incorrecto.',
    'date' => 'El campo :attribute no corresponde con una fecha válida',
    'date_equals' => 'TEl campo :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El campo :attribute no corresponde con el formato de fecha :format.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => 'Los campos :attribute y :other deben ser diferentes.',
    'digits' => 'El campo :attribute debe ser un número de :digits dígitos.',
    'digits_between' => 'El campo :attribute debe contener entre :min y :max dígitos.',
    'dimensions' => 'El campo :attribute tiene dimensiones de imagen inválidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'doesnt_end_with' => 'The :attribute may not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute may not start with one of the following: :values.',
    'email' => 'El campo :attribute debe ser una dirección de correo válida.',
    'ends_with' => 'El campo :attribute debe finalizar con alguno de los siguientes valores: :values',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'El campo :attribute seleccionado no existe.',
    'file' => 'El campo :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'array' => 'El campo :attribute debe contener más de :value elementos.',
        'file' => 'El archivo :attribute debe pesar más de :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser mayor a :value.',
        'string' => 'El campo :attribute debe contener más de :value caracteres.',
    ],
    'gte' => [
        'array' => 'El campo :attribute debe contener :value o más elementos.',
        'file' => 'El archivo :attribute debe pesar :value o más kilobytes.',
        'numeric' => 'El campo :attribute debe ser mayor o igual a :value.',
        'string' => 'El campo :attribute debe contener :value o más caracteres.',
    ],
    'image' => 'El campo :attribute debe ser una imagen.',
    'in' => 'El campo :attribute es inválido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => 'El campo :attribute debe ser un número entero.',
    'ip' => 'El campo :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El campo :attribute debe ser una cadena de texto JSON válida.',
    'lt' => [
        'array' => 'El campo :attribute debe contener menos de :value elementos.',
        'file' => 'El archivo :attribute debe pesar menos de :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser menor a :value.',
        'string' => 'El campo :attribute debe contener menos de :value caracteres.',
    ],
    'lte' => [
        'array' => 'El campo :attribute debe contener :value o menos elementos.',
        'file' => 'El archivo :attribute debe pesar :value o menos kilobytes.',
        'numeric' => 'El campo :attribute debe ser menor o igual a :value.',
        'string' => 'El campo :attribute debe contener :value o menos caracteres.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => 'El campo :attribute no debe contener más de :max elementos.',
        'file' => 'El archivo :attribute no debe pesar más de :max kilobytes.',
        'numeric' => 'El campo :attribute no debe ser mayor a :max.',
        'string' => 'El campo :attribute no debe contener más de :max caracteres.',
    ],
    'max_digits' => 'The :attribute must not have more than :max digits.',
    'mimes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'array' => 'El campo :attribute debe contener al menos :min elementos.',
        'file' => 'El archivo :attribute debe pesar al menos :min kilobytes.',
        'numeric' => 'El campo :attribute debe ser al menos :min.',
        'string' => 'El campo :attribute debe contener al menos :min caracteres.',
    ],
    'min_digits' => 'The :attribute must have at least :min digits.',
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'El campo :attribute seleccionado es inválido.',
    'not_regex' => 'El formato del campo :attribute es inválido.',
    'numeric' => 'El campo :attribute debe ser un número.',
    'password' => [
        'letters' => 'El :atribute debe contener al menos una letra.',
        'mixed' => 'El :attribute debe contener al menos una letra mayúscula y una minúscula.',
        'numbers' => 'El :attribute debe contener al menos un número.',
        'symbols' => 'El :attribute debe contener al menos un símbolo.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'El campo :attribute debe estar presente.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'El formato del campo :attribute es inválido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'El campo :attribute es obligatorio cuando el campo :other es :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => 'El campo :attribute es requerido a menos que :other se encuentre en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :values están presentes.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los campos :values están presentes.',
    'same' => 'Los campos :attribute y :other deben coincidir.',
    'size' => [
        'array' => 'El campo :attribute debe contener :size elementos.',
        'file' => 'El archivo :attribute debe pesar :size kilobytes.',
        'numeric' => 'El campo :attribute debe ser :size.',
        'string' => 'El campo :attribute debe contener :size caracteres.',
    ],
    'starts_with' => 'El campo :attribute debe comenzar con uno de los siguientes valores: :values',
    'string' => 'El campo :attribute debe ser una cadena de caracteres.',
    'timezone' => 'El campo :attribute debe ser una zona horaria válida.',
    'unique' => 'El valor del campo :attribute ya está en uso.',
    'uploaded' => 'El campo :attribute no se pudo subir.',
    'url' => 'El formato del campo :attribute es inválido.',
    'uuid' => 'El campo :attribute debe ser un UUID válido',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
