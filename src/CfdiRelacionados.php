<?php
$CfdiRelacionado = require('CfdiRelacionado.php');
return [
    'attributes' => [
        'TipoRelacion' => 'Clave de relacion / CFDIs generados y previos - catCFDI:c_TipoRelacion - required',
        'CfdiRelacionado' => $CfdiRelacionado
    ]

];