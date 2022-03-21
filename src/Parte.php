<?php

return [
    'attributes' => [
        'ClaveProdServ' => ' la clave del producto o del servicio amparado por la presente parte - catCFDI:c_ClaveProdServ - required ',
        'NoIdentificacion' => 'l número de serie o identificador del producto - length 1-100 - optional - [^|]{1,100}',
        'Cantidad' => 'cantidad de bienes y servicios - decimal 0.000001- required ',
        'Unidad' => 'unidad de medida propia de la operación del emisor - string - length:1-20 - [^|]{1,20} - optional',
        'Descripcion' => 'descripción del bien o servicio - string - required - length:1-1000 - [^|]{1,1000}',
        'ValorUnitario' => 'valor o precio unitario del bien o servicio - optional - tdCFDI:t_Importe',
        'Importe' => 'importe total de los b / s - optional - tdCFDI:t_Importe',
    ]
];