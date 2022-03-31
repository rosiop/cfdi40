<?php
$CfdiRelacionado = require('CfdiRelacionado.php');
return [
    'attributes' => [
        'TipoRelacion' => [
            'Descripción' => 'Atributo requerido para indicar la clave de la relación que existe entre éste que se está generando y el o los CFDI previos.',
            'Uso' => 'requerido',
            'Tipo Especial' => 'catCFDI:c_TipoRelacion',
        ],
        'CfdiRelacionado' => $CfdiRelacionado 
    ]

];