<?php

return [
    'attributes' => [
        'ClaveProdServ' => [
            'Descripción' => 'Atributo requerido para expresar la clave del producto o del servicio amparado por la presente parte. Es requerido y deben utilizar las claves del catálogo de productos y servicios, cuando los conceptos que registren por sus actividades correspondan con dichos conceptos.',
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:c_ClaveProdServ',
],
        'NoIdentificacion' =>[
            'Descripción' => 'Atributo opcional para expresar el número de serie, número de parte del bien o identificador del producto o del servicio amparado por la presente parte. Opcionalmente se puede utilizar claves del estándar GTIN ',
            'Uso' => 'opcional',
            'Tipo Base' => 'xs:string',
            'Longitud Mínima' => '1',
            'Longitud Máxima ' => '100',
            'Espacio en Blanco' => 'Colapsar',
            'Patrón' => '[^|]{1,100}',
        ],

        'Cantidad' => [
            'Descripción' => 'Atributo requerido para precisar la cantidad de bienes o servicios del tipo particular definido por la presente parte. ',
            'Uso' => 'requerido',
            'Tipo Base' => 'xs:decimal',
            'Valor Mínimo Incluyente' => '0.000001',
            'Posiciones Decimales' => '6',
            'Espacio en Blanco' => 'Colapsar',
        ],

        'Unidad' => [
            'Descripción' => 'Atributo opcional para precisar la unidad de medida propia de la operación del emisor, aplicable para la cantidad expresada en la parte. La unidad debe corresponder con la descripción de la parte.  ',
            'Uso' => 'opcional',
            'Tipo Base' => 'xs:string',
            'Longitud Mínima' => '1',
            'Longitud Máxima ' => '20',
            'Espacio en Blanco' => 'Colapsar',
            'Patrón' => '[^|]{1,20}',
        ],

        'Descripcion' => [
            'Descripción' => 'Atributo requerido para precisar la descripción del bien o servicio cubierto por la presente parte. ',
            'Uso' => 'requerido',
            'Tipo Base' => 'xs:string',
            'Longitud Mínima' => '1',
            'Longitud Máxima ' => '1000',
            'Espacio en Blanco' => 'Colapsar',
            'Patrón' => '[^|]{1,1000}',
        ],

        'ValorUnitario' => 
        [
            'Descripción' => 'Atributo opcional para precisar el valor o precio unitario del bien o servicio cubierto por la presente parte. No se permiten valores negativos.',
            'Uso' => 'opcional',
            'Tipo Especial' => 'tdCFDI:t_Importe',
],

        'Importe' => [
            'Descripción' => 'Atributo requerido para expresar el mes o los meses al que corresponde la información del comprobante global.',
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:c_Meses',
],
]
];