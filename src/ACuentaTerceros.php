<?php

return [
    'attributes' => [
        'RfcACuentaTerceros' => 'RFC del contribuyente Tercero - required - tdCFDI:t_RFC',
        'NombreACuentaTerceros' => 'nombre, denominación o razón social del contribuyente Tercero - required - string - [^|]{1,254}',
        'RegimenFiscalACuentaTerceros' => ' clave del régimen del contribuyente Tercero - required - catCFDI:c_RegimenFiscal',
        'DomicilioFiscalACuentaTerceros' => 'l código postal del domicilio fiscal del Tercero - required - string - length:5 - [0-9]{5} ',
    ]
];