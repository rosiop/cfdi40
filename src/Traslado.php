<?php

return [
    'attributes' => [
        'Base' => 'para señalar la base para el cálculo del impuesto - required - decimal: 0.000001',
        'Impuesto' => 'clave del tipo de impuesto trasladado - required - catCFDI:c_Impuesto',
        'TipoFactor' => 'señalar la clave del tipo de factor que se aplica a la base - required - catCFDI:c_TipoFactor',
        'TasaOCuota' => 'tasa o cuota del impuesto - optional - decimal: 0.000000',
        'Importe' => ' importe del impuesto trasladado - optional - tdCFDI:t_Importe',
    ]
];