<?php
$Folios = require('Folios.php');

return [
    'attributes' => [
        'RfcEmisor' => 'expresar el RFC del emisor del (os) CFDI a cancelar - string - required',
        'Fecha' => 'expresar la fecha de la operación - required - ',
        'Folios' => $Folios,
    ]
];