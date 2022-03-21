<?php

$Impuestos = require('Impuestos.php');
$ACuentaTerceros = require('ACuentaTerceros.php');
$InformacionAduanera = require('InformacionAduanera.php');
$CuentaPredial = require('CuentaPredial.php');
$ComplementoConcepto = require('ComplementoConcepto.php');
$Parte = require('Parte.php');

return [
    'attributes' => [
        'ClaveProdServ' => 'Cve del producto o servicio - catCFDI:c_ClaveProdServ - required ',
        'NoIdentificacion' => 'SKU standar GTIN - string - length 1-100 - optional - [^|]{1,100}',
        'Cantidad' => 'cantidad de bienes y servicios - decimal 0.000001- required ',
        'ClaveUnidad' => 'Cve unidad de medida - catCFDI:c_ClaveUnidad - required',
        'Unidad' => 'unidad de medida propia de la operación del emisor - string - length:1-20 - [^|]{1,20} - optional',
        'Descripcion' => 'descripción del bien o servicio - string',
        'ValorUnitario' => 'valor o precio unitario del bien o servicio - required',
        'Importe' => 'importe total - required - tdCFDI:t_Importe',
        'Descuento' => 'importe de los descuentos - optional - required',
        'ObjetoImp' => 'expresar si la operación comercial es objeto o no de impuesto - required - catCFDI:c_ObjetoImp',
        'Impuestos' => $Impuestos,
        'ACuentaTerceros' => $ACuentaTerceros,
        'InformacionAduanera' => $InformacionAduanera,
        'CuentaPredial' => $CuentaPredial,
        'ComplementoConcepto' => $ComplementoConcepto,
        'Parte' => $Parte,
    ]
];
