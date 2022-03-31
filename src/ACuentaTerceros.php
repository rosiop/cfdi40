<?php

return [
    'attributes' => [
        'RfcACuentaTerceros' => [
            'Descripción' => 'Atributo requerido para registrar la Clave del Registro Federal de Contribuyentes del contribuyente Tercero, a cuenta del que se realiza la operación.',
            'Uso' => 'requerido',
            'Tipo Especial' => 'tdCFDI:t_RFC',
        ],

        'NombreACuentaTerceros' => [
            'Descripción' => 'Atributo requerido para registrar el nombre, denominación o razón social del contribuyente Tercero correspondiente con el Rfc, a cuenta del que se realiza la operación. ',
            'Uso' => 'requerido',
            'Tipo Base' => 'xs:string',
            'Longitud Mínima' => '1',
            'Longitud Máxima ' => '254',
            'Espacio en Blanco' => 'Colapsar',
            'Patrón' => '[^|]{1,254}',
        ],

        'RegimenFiscalACuentaTerceros' => [
            'Descripción' => 'Atributo requerido para incorporar la clave del régimen del contribuyente Tercero, a cuenta del que se realiza la operación.',
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:c_RegimenFiscal',
],
        'DomicilioFiscalACuentaTerceros' => [
            'Descripción' => 'Atributo requerido para incorporar el código postal del domicilio fiscal del Tercero, a cuenta del que se realiza la operación.',
            'Uso' => 'requerido',
            'Tipo Base' => 'xs:string',
            'Longitud ' => '5',
            'Espacio en Blanco' => 'Colapsar',
            'Patrón' => '[0-9]{5}',
        ],
    ]
];