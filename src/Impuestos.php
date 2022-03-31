<?php

$Traslados = require('Traslados.php');
$Retenciones = require('Retenciones.php');

return [
    'attributes' => [
        'TotalImpuestosRetenidos' => [
            'Descripción' => 'Atributo condicional para expresar el total de los impuestos retenidos que se desprenden de los conceptos expresados en el comprobante fiscal digital por Internet. No se permiten valores negativos. Es requerido cuando en los conceptos se registren impuestos retenidos. ',
            'Uso' => 'opcional',
            'Tipo Especial' => 'tdCFDI:t_Importe',
        ],
        'TotalImpuestosTrasladados' => [
            'Descripción' => 'Atributo condicional para expresar el total de los impuestos trasladados que se desprenden de los conceptos expresados en el comprobante fiscal digital por Internet. No se permiten valores negativos. Es requerido cuando en los conceptos se registren impuestos trasladados.',
            'Uso' => 'opcional',
            'Tipo Especial' => 'tdCFDI:t_Importe',
        ],

        'Traslados' => $Traslados,
        'Retenciones' => $Retenciones,
    ]

];
