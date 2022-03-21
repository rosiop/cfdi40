<?php

return [
    'attributes' => [
        'RFC' => 'Cve RFC del emisor - tdCFDI:t_RFC  -required',
        'Nombre' => 'nombre  del emisor del comprobante - string - length:1-254 - required - [^|]{1,254}',
        'RegimenFiscal' => 'Cve regimen emisor - catCFDI:c_RegimenFiscal - required',
        'FacAtrAdquirente' => 'No. Operacion proporcionado xel SAT cuando se trate de un PCECFDI o un PCGCFDISP string - length:10 - optional - [0-9]{10} ',
    ]
];
