<?php

$Impuestos = require('Impuestos.php');
$ACuentaTerceros = require('ACuentaTerceros.php');
$InformacionAduanera = require('InformacionAduanera.php');
$CuentaPredial = require('CuentaPredial.php');
$ComplementoConcepto = require('ComplementoConcepto.php');
$Parte = require('Parte.php');

return [
    'attributes' => [
        'ClaveProdServ' => [
            'Descripción' => 'Atributo requerido para expresar la clave del producto o del servicio amparado por el presente concepto. Es requerido y deben utilizar las claves del catálogo de productos y servicios, cuando los conceptos que registren por sus actividades correspondan con dichos conceptos.',
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:c_ClaveProdServ',
        ],

        'NoIdentificacion' => [
            'Descripción' => 'Atributo opcional para expresar el número de parte, identificador del producto o del servicio, la clave de producto o servicio, SKU o equivalente, propia de la operación del emisor, amparado por el presente concepto. Opcionalmente se puede utilizar claves del estándar GTIN.',
            'Uso' => 'opcional',
            'Longitud Mínima' => '1',
            'Longitud Máxima ' => '100',
            'Tipo Base' => 'xs:string',
            'Espacio en Blanco' => 'Colapsar',
            'Patrón' => '[^|]{1,100}',
        ],

        'Cantidad' =>  [ 
            'Descripción' => 'Atributo requerido para precisar la cantidad de bienes o servicios del tipo particular definido por el presente concepto.',
            'Uso' => 'requerido',
            'Tipo Base' => 'xs:decimal',
            'Valor Minimo Incluyente' => '0.000001',
            'Posiciones Decimales' => '6',
            'Espacio en Blanco' => 'Colapsar',
        ],

        'ClaveUnidad' => [
            'Descripción' => 'Atributo requerido para precisar la clave de unidad de medida estandarizada aplicable para la cantidad expresada en el concepto. La unidad debe corresponder con la descripción del concepto.',
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:c_ClaveUnidad',
        ],

        'Unidad' => [
            'Descripción' => 'Atributo opcional para precisar la unidad de medida propia de la  operación del emisor, aplicable para la cantidad expresada en el concepto. La unidad debe corresponder con la descripción del concepto ',
            'Uso' => 'opcional',
            'Longitud Mínima' => '1',
            'Longitud Máxima ' => '20',
            'Tipo Base' => 'xs:string',
            'Espacio en Blanco' => 'Colapsar',
            'Patrón' => '[^|]{1,20}',
        ],
        'Descripcion' => [
            'Descripción' => 'Atributo requerido para precisar la descripción del bien o servicio cubierto por el presente concepto.',
            'Uso' => 'requerido',
            'Longitud Mínima' => '1',
            'Longitud Máxima ' => '1000',
            'Tipo Base' => 'xs:string',
            'Espacio en Blanco' => 'Colapsar',
            'Patrón' => '[^|]{1,1000}',
        ],
        'ValorUnitario' => [
            'Descripción' => 'Atributo requerido para precisar el valor o precio unitario del bien o servicio cubierto por el presente concepto.',
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:t_Importe',
        ],

        'Importe' => [
            'Descripción' => 'Atributo requerido para precisar el importe total de los bienes o servicios del presente concepto. Debe ser equivalente al resultado de multiplicar la cantidad por el valor unitario expresado en el concepto. No se permiten valores negativos. ',
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:t_Importe',
        ],

        'Descuento' =>  [
                    'Descripción' => 'Atributo opcional para representar el importe de los descuentos aplicables al concepto. No se permiten valores negativos',
                    'Uso' => 'opcional',
                    'Tipo Especial' => 'catCFDI:t_Importe',
        ],

        'ObjetoImp' =>  [
                    'Descripción' => 'Atributo requerido para expresar si la operación comercial es objeto o no de impuesto.',
                    'Uso' => 'requerido',
                    'Tipo Especial' => 'catCFDI:c_ObjetoImp',
                ],

        'Impuestos' => $Impuestos,
        'ACuentaTerceros' => $ACuentaTerceros,
        'InformacionAduanera' => $InformacionAduanera,
        'CuentaPredial' => $CuentaPredial,
        'ComplementoConcepto' => $ComplementoConcepto,
        'Parte' => $Parte,
    ]
];
