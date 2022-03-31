<?php

return [
    'attributes' => [
        'Base' =>  [ 
            'Descripción' => 'Atributo requerido para señalar la base para el cálculo del impuesto, la determinación de la base se realiza de acuerdo con las disposiciones fiscales vigentes. No se permiten valores negativos.',
            'Uso' => 'requerido',
            'Tipo Base' => 'xs:decimal',
            'Valor Minimo Incluyente' => '0.000001',
            'Posiciones Decimales' => '6',
            'Espacio en Blanco' => 'Colapsar',
            ],
        'Impuesto' => [
            'Descripción' => 'Atributo requerido para señalar la clave del tipo de impuesto trasladado aplicable al concepto.',
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:c_Impuesto',
        ],

        'TipoFactor' => [
            'Descripción' => 'Atributo requerido para señalar la clave del tipo de factor que se aplica a la base del impuesto. ',
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:c_TipoFactor',
        ],

        'TasaOCuota' => [ 
            'Descripción' => 'Atributo condicional para señalar el valor de la tasa o cuota del impuesto que se traslada para el presente concepto. Es requerido cuando el atributo TipoFactor tenga una clave que corresponda a Tasa o Cuota',
            'Uso' => 'requerido',
            'Tipo Base' => 'xs:decimal',
            'Valor Minimo Incluyente' => '0.000000',
            'Posiciones Decimales' => '6',
            'Espacio en Blanco' => 'Colapsar',
            ],
            
        'Importe' => [
            'Descripción' => 'Atributo condicional para señalar el importe del impuesto trasladado que aplica al concepto. No se permiten valores negativos. Es requerido cuando TipoFactor sea Tasa o Cuota.',
            'Uso' => 'opcional',
            'Tipo Especial' => 'tdCFDI:t_Importe',
        ],
    ]
];