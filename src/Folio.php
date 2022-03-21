<?php

return [
    'attributes' => [
        'UUID' => 'UUID generado en la operación de timbrado - string - required - [a-f0-9A-F]{8}-[a-f0-9A-F]{4}-[a-f0-9A-F]{4}-[a-f0-9A-F]{4}-[a-f0-9A-F]{12}',
        'Motivo' => 'string - valores permitidos: 01 02 03 04 - required - ',
        'FolioSustitucion' => 'representa al UUID que sustituye al folio fiscal cancelado. - required - optional - string - [a-f0-9A-F]{8}-[a-f0-9A-F]{4}-[a-f0-9A-F]{4}-[a-f0-9A-F]{4}-[a-f0-9A-F]{12}',
    ]
];