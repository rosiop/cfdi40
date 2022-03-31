<?php

return [
    'attributes' => [
        'Base' => [ 
            'Descripción' => 'Atributo requerido para señalar la base para el cálculo de la retención, la determinación de la base se realiza de acuerdo con las disposiciones fiscales vigentes. No se permiten valores negativos',
            'Uso' => 'requerido',
            'Tipo Base' => 'xs:decimal',
            'Valor Minimo Incluyente' => '0.000001',
            'Posiciones Decimales' => '6',
            'Espacio en Blanco' => 'Colapsar',
            ],

        'Impuesto' => [
            'Descripción' => 'Atributo requerido para señalar la clave del tipo de impuesto retenido aplicable al concepto.',
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:c_Impuesto',
        ],

        'TipoFactor' => [
            'Descripción' => 'Atributo requerido para señalar la clave del tipo de factor que se aplica a la base del impuesto',
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:c_TipoFactor',
        ],

        'TasaOCuota' =>  [ 
            'Descripción' => 'Atributo requerido para señalar la tasa o cuota del impuesto que se retiene para el presente concepto.',
            'Uso' => 'requerido',
            'Tipo Base' => 'xs:decimal',
            'Valor Minimo Incluyente' => '0.000000',
            'Posiciones Decimales' => '6',
            'Espacio en Blanco' => 'Colapsar',
            ],
        
        'Importe' => [
            'Descripción' => 'Atributo requerido para señalar el importe del impuesto retenido que aplica al concepto. No se permiten valores negativos.',
            'Uso' => 'requerido',
            'Tipo Especial' => 'tdCFDI:t_Importe',
        ],
    ]
];