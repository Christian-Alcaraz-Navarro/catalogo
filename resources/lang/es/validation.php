<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de lenguaje contienen los mensajes de error predeterminados utilizados por
    | la clase de validador. Algunas de estas reglas tienen múltiples versiones, como
    | las reglas de tamaño. Siéntete libre de ajustar cada uno de estos mensajes aquí.
    |
    */

    'accepted' => 'El campo debe ser aceptado.',
    'active_url' => 'El campo no es una URL válida.',
    'after' => 'El campo debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El campo debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El campo debe contener solo letras.',
    'alpha_dash' => 'El campo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El campo debe contener solo letras y números.',
    'array' => 'El campo debe ser un arreglo.',
    'before' => 'El campo debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El campo debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => 'El campo debe estar entre :min y :max.',
        'file' => 'El campo debe tener entre :min y :max kilobytes.',
        'string' => 'El campo debe tener entre :min y :max caracteres.',
        'array' => 'El campo debe tener entre :min y :max elementos.',
    ],
    'boolean' => 'El campo debe ser verdadero o falso.',
    'confirmed' => 'La confirmación del campo no coincide.',
    'date' => 'El campo no es una fecha válida.',
    'date_equals' => 'El campo debe ser una fecha igual a :date.',
    'date_format' => 'El campo no coincide con el formato :format.',
    'different' => 'Los campos y :other deben ser diferentes.',
    'digits' => 'El campo debe tener :digits dígitos.',
    'digits_between' => 'El campo debe tener entre :min y :max dígitos.',
    'dimensions' => 'El campo tiene dimensiones de imagen no válidas.',
    'distinct' => 'El campo tiene un valor duplicado.',
    'email' => 'El campo debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El campo debe terminar con uno de los siguientes valores: :values.',
    'exists' => 'El seleccionado es inválido.',
    'file' => 'El campo debe ser un archivo.',
    'filled' => 'El campo debe tener un valor.',
    'gt' => [
        'numeric' => 'El campo debe ser mayor que :value.',
        'file' => 'El campo debe ser mayor que :value kilobytes.',
        'string' => 'El campo debe ser mayor que :value caracteres.',
        'array' => 'El campo debe tener más de :value elementos.',
    ],
    'gte' => [
        'numeric' => 'El campo debe ser mayor o igual que :value.',
        'file' => 'El campo debe ser mayor o igual que :value kilobytes.',
        'string' => 'El campo debe ser mayor o igual que :value caracteres.',
        'array' => 'El campo debe tener :value elementos o más.',
    ],
    'image' => 'El campo debe ser una imagen.',
    'in' => 'El seleccionado es inválido.',
    'in_array' => 'El campo no existe en :other.',
    'integer' => 'El campo debe ser un número entero.',
    'ip' => 'El campo debe ser una dirección IP válida.',
    'ipv4' => 'El campo debe ser una dirección IPv4 válida.',
    'ipv6' => 'El campo debe ser una dirección IPv6 válida.',
    'json' => 'El campo debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => 'El campo debe ser menor que :value.',
        'file' => 'El campo debe ser menor que :value kilobytes.',
        'string' => 'El campo debe ser menor que :value caracteres.',
        'array' => 'El campo debe tener menos de :value elementos.',
    ],
    'lte' => [
        'numeric' => 'El campo debe ser menor o igual que :value.',
        'file' => 'El campo debe ser menor o igual que :value kilobytes.',
        'string' => 'El campo debe ser menor o igual que :value caracteres.',
        'array' => 'El campo no debe tener más de :value elementos.',
    ],
    'max' => [
        'numeric' => 'El campo no debe ser mayor que :max.',
        'file' => 'El campo no debe ser mayor que :max kilobytes.',
        'string' => 'El campo no debe ser mayor que :max caracteres.',
        'array' => 'El campo no debe tener más de :max elementos.',
    ],
    'mimes' => 'El campo debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El campo debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => 'El campo debe ser al menos :min.',
        'file' => 'El campo debe ser al menos :min kilobytes.',
        'string' => 'El campo debe tener al menos :min caracteres.',
        'array' => 'El campo debe tener al menos :min elementos.',
    ],
    'multiple_of' => 'El campo debe ser un múltiplo de :value.',
    'not_in' => 'El seleccionado es inválido.',
    'not_regex' => 'El formato del campo no es válido.',
    'numeric' => 'El campo debe ser un número.',
    'password' => 'La contraseña es incorrecta.',
    'present' => 'El campo debe estar presente.',
    'regex' => 'El formato del campo no es válido.',
    'required' => 'El campo es requerido.',
    'required_if' => 'El campo es requerido cuando :other es :value.',
    'required_unless' => 'El campo es requerido a menos que :other esté en :values.',
    'required_with' => 'El campo es requerido cuando :values está presente.',
    'required_with_all' => 'El campo es requerido cuando :values están presentes.',
    'required_without' => 'El campo es requerido cuando :values no está presente.',
    'required_without_all' => 'El campo es requerido cuando ninguno de :values están presentes.',
    'prohibited' => 'El campo está prohibido.',
    'prohibited_if' => 'El campo está prohibido cuando :other es :value.',
    'prohibited_unless' => 'El campo está prohibido a menos que :other esté en :values.',
    'same' => 'Los campos y :other deben coincidir.',
    'size' => [
        'numeric' => 'El campo debe ser :size.',
        'file' => 'El campo debe ser de :size kilobytes.',
        'string' => 'El campo debe ser de :size caracteres.',
        'array' => 'El campo debe contener :size elementos.',
    ],
    'starts_with' => 'El campo debe comenzar con uno de los siguientes valores: :values.',
    'string' => 'El campo debe ser una cadena de texto.',
    'timezone' => 'El campo debe ser una zona horaria válida.',
    'unique' => 'El campo ya ha sido tomado.',
    'uploaded' => 'La carga del archivo ha fallado.',
    'url' => 'El formato del campo no es válido.',
    'uuid' => 'El campo debe ser un UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Aquí puedes especificar mensajes de validación personalizados para atributos utilizando la
    | convención "attribute.rule" para nombrar las líneas. Esto facilita
    | especificar un mensaje de lenguaje personalizado para una regla de atributo dada.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'mensaje-personalizado',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de lenguaje se utilizan para reemplazar nuestro marcador de posición de atributo
    | con algo más fácil de entender para el lector, como "Dirección de correo electrónico" en lugar de "email".
    | Esto simplemente nos ayuda a hacer que nuestro mensaje sea más expresivo.
    |
    */

    'attributes' => [],

];
