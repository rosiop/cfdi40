<?php

return [
    'attributes' => [
        'UUID' => 
        [
                        'Descripción' => 'Atributo requerido para registrar el folio fiscal (UUID) de un CFDI relacionado con el presente comprobante, por ejemplo: Si el CFDI relacionado es un comprobante de traslado que sirve para registrar el movimiento de la mercancía. Si este comprobante se usa como nota de crédito o nota de débito del comprobante relacionado. Si este comprobante es una devolución sobre el comprobante relacionado. Si éste sustituye a una factura cancelada. ',
                        'Uso' => 'requerido',
                        'Longitud' => '36',
                        'Tipo Base' => 'xs:string',
                        'Espacio en Blanco' => 'Colapsar',
                        'Patrón' => '[a-f0-9A-F]{8}-[a-f0-9A-F]{4}-[a-f0-9A-F]{4}-[a-f0-9A-F]{4}-[a-f0-9A-F]{12}',
                    ],
    ]
];