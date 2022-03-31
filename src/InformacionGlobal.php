<?php

return [
    'attributes' => [
        'Periodicidad' => [
            'Descripción' => 'Atributo requerido para expresar el período al que corresponde la información del comprobante global.',
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:c_Periodicidad',
        ],

        'Meses' =>[
            'Descripción' => 'Atributo requerido para expresar el mes o los meses al que corresponde la información del comprobante global.',
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:c_Meses',
        ],

        'Año' => [
            'Descripción' => ' Atributo requerido para expresar el año al que corresponde la información del comprobante global.',
            'Uso' => 'requerido',
            'Tipo Base' => 'xs:short',
            'Valor Minimo Incluyente' => '2021',
            'Espacio en Blanco' => 'Colapsar',
        ],
    ]
];
