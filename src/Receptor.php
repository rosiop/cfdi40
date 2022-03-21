<?php

return [
    'attributes' => [
        'Rfc' => 'Cve RFC del receptor - tdCFDI:t_RFC  -required',
        'Nombre' => 'nombre completo (apellidos) del receptor del comprobante - string - length:1-254 - required - [^|]{1,254}',
        'DomicilioFiscalReceptor' => 'CP del receptor - string - length:5 - required - [0-9]{5}',
        'ResidenciaFiscal' => 'Cve del pais de residencia --- Es requerido cuando se incluya el complemento de comercio exterior o se registre el atributo NumRegIdTrib. - catCFDI:c_Pais - optional',
        'NumRegIdTrib' => 'Registrar numero de registro de identidad fiscal cuando resida en el extranjero - required cuando se incluye el complemento de comercio exterior - string - length: 1-40 - optional',
        'RegimenFiscalReceptor' => 'Cve regimen receptor - catCFDI:c_RegimenFiscal - required',
        'UsoCFDI' => 'Cve uso del CFDI que dara el receptor - catCFDI:c_UsoCFDI - required',
    ]
];
