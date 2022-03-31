<?php

return [
    'attributes' => [
        'Rfc' => [
            'Descripción' => 'Atributo requerido para registrar la Clave del Registro Federal de Contribuyentes correspondiente al contribuyente receptor del comprobante.',
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:t_RFC',
        ],
        
        'Nombre' => [
            'Descripción' => 'Atributo requerido para registrar el nombre(s), primer apellido, segundo apellido, según corresponda, denominación o razón social del contribuyente, inscrito en el RFC, del receptor del comprobante. ',
            'Uso' => 'requerido',
            'Longitud Mínima' => '1',
            'Longitud Máxima ' => '254',
            'Tipo Base' => 'xs:string',
            'Espacio en Blanco' => 'Colapsar',
            'Patrón' => '[^|]{1,254}',
        ],

        'DomicilioFiscalReceptor' => [
            'Descripción' => 'Atributo requerido para registrar el código postal del domicilio fiscal del receptor del comprobante',
            'Uso' => 'requerido',
            'Longitud ' => '5',
            'Tipo Base' => 'xs:string',
            'Espacio en Blanco' => 'Colapsar',
            'Patrón' => '[0-9]{5} ',
        ],

        'ResidenciaFiscal' =>[
            'Descripción' => 'Atributo condicional para registrar la clave del país de residencia para efectos fiscales del receptor del comprobante, cuando se trate de un extranjero, y que es conforme con la especificación ISO 3166-1 alpha-3. Es requerido cuando se incluya el complemento de comercio exterior o se registre el atributo NumRegIdTrib.',
            'Uso' => 'opcional',
            'Tipo Especial' => 'catCFDI:c_Pais',
                ],

        'NumRegIdTrib' => [
            'Descripción' => 'Atributo condicional para expresar el número de registro de identidad fiscal del receptor cuando sea residente en el extranjero. Es requerido cuando se incluya el complemento de comercio exterior ',
            'Uso' => 'opcional',
            'Longitud Mínima' => '1',
            'Longitud Máxima ' => '40',
            'Tipo Base' => 'xs:string',
            'Espacio en Blanco' => 'Colapsar',
        ],

        'RegimenFiscalReceptor' => [
            'Descripción' => 'Atributo requerido para incorporar la clave del régimen fiscal del contribuyente receptor al que aplicará el efecto fiscal de este comprobante.',
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:c_RegimenFiscal',
        ],

        'UsoCFDI' => [
            'Descripción' => 'Atributo requerido para expresar la clave del uso que dará a esta factura el receptor del CFDI.',
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:c_UsoCFDI',
        ],
    ]
];
