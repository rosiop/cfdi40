<?php

return [
    'attributes' => [
        'RFC' => [
            'Descripción' => 'Atributo requerido para expresar el mes o los meses al que corresponde la información del comprobante global.',
            'Uso' => 'requerido',
            'Tipo Especial' => 'tdCFDI:t_RFC',
        ],
        'Nombre' => [
            'Descripción' => 'Atributo requerido para registrar el nombre, denominación o razón social del contribuyente inscrito en el RFC, del emisor del comprobante. ',
            'Uso' => 'requerido',
            'Longitud Mínima' => '1',
            'Longitud Máxima ' => '254',
            'Tipo Base' => 'xs:string',
            'Espacio en Blanco' => 'Colapsar',
            'Patrón' => '[^|]{1,254}',
        ],
        'RegimenFiscal' => [
            'Descripción' => 'Atributo requerido para incorporar la clave del régimen del contribuyente emisor al que aplicará el efecto fiscal de este comprobante.' ,
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:c_RegimenFiscal',
        ],
        'FacAtrAdquirente' =>   [
            'Descripción' => 'Atributo condicional para expresar el número de operación proporcionado por el SAT cuando se trate de un comprobante a través de un PCECFDI o un PCGCFDISP.',
            'Uso' => 'opcional',
            'Longitud ' => '10',
            'Tipo Base' => 'xs:string',
            'Espacio en Blanco' => 'Colapsar',
            'Patrón' => '[0-9]{10}',
            ],
    ]
];
