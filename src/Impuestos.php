<?php

$Traslados = require('Traslados.php');
$Retenciones = require('Retenciones.php');

return [
    'attributes' => null,
    [
        'Traslados' => $Traslados,
        'Retenciones' => $Retenciones
    ]
];
