<?php

return [
    'attributes' => [
        'Base' => 'para señalar la base para el cálculo de la retencion - required - decimal: 0.000001',
        'Impuesto' => 'clave del tipo de impuesto retenido - required - catCFDI:c_Impuesto',
        'TipoFactor' => 'señalar la clave del tipo de factor que se aplica a la base del impuesto - required - catCFDI:c_TipoFactor',
        'TasaOCuota' => 'tasa o cuota del impuesto - required - decimal: 0.000000',
        'Importe' => ' importe del impuesto trasladado - required - tdCFDI:t_Importe',
    ]
];