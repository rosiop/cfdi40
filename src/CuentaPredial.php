<?php

return [
    'attributes' => [
        'Numero' => [
            'Descripción' => 'Atributo requerido para precisar el número de la cuenta predial del inmueble cubierto por el presente concepto, o bien para incorporar los datos de identificación del certificado de participación inmobiliaria no amortizable, tratándose de arrendamiento.', 
            'Uso' => 'requerido',
            'Tipo Base' => 'xs:string',
            'Longitud Mínima' => '1',
            'Longitud Máxima ' => '150',
            'Espacio en Blanco' => 'Colapsar',
            'Patrón' => '[0-9a-zA-Z]{1,150}',
        ],
    ]
];