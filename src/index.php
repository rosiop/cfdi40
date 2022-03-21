<?php

require __DIR__.'./../vendor/autoload.php';

$InformacionGlobal = require('InformacionGlobal.php');
$CfdiRelacionados = require('CfdiRelacionados.php');
$Emisor = require('Emisor.php');
$Receptor = require('Receptor.php');
$Conceptos = require('Conceptos.php');
$Impuestos = require('Impuestos.php');
$Complemento = require('Complemento.php');
$Addenda = require('Addenda.php');
$Cancelacion = require('Cancelacion.php');

$cfdi = [
    'comprobante' => [
        'attributes' => [
            'Version' => [
                    'Descripción' => 'Atributo requerido con valor prefijado a 4.0 que indica la versión del estándar bajo el que se encuentra expresado el comprobante.',
                    'Uso' => 'requerido',
                    'Valor Prefijado' => '4.0',
                    'Tipo Base' => 'xs:string',
                    'Espacio en Blanco' => 'Colapsar',
                ] ,
            'Serie'   => [
                'Descripción' => ' Atributo opcional para precisar la serie para control interno del contribuyente. Este atributo acepta una cadena de caracteres.',
                'Uso' => 'opcional',
                'Longitud Mínima' => '1',
                'Longitud Máxima ' => '25',
                'Tipo Base' => 'xs:string',
                'Espacio en Blanco' => 'Colapsar',
                'Patrón' => '[^|]{1,25}',
            ],
            'Folio'   => [
                'Descripción' => 'Atributo opcional para control interno del contribuyente que expresa el folio del comprobante, acepta una cadena de caracteres.',
                'Uso' => 'opcional',
                'Longitud Mínima' => '1',
                'Longitud Máxima ' => '40',
                'Tipo Base' => 'xs:string',
                'Espacio en Blanco' => 'Colapsar',
                'Patrón' => '[^|]{1,40}',
            ],
            'Fecha'   => [
                'Descripción' => ' Atributo requerido para la expresión de la fecha y hora de expedición del Comprobante Fiscal Digital por Internet. Se expresa en la forma AAAAMM-DDThh:mm:ss y debe corresponder con la hora local donde se expide el comprobante.',
                'Uso' => 'requerido',
                'Tipo Especial' => 'tdCFDI:t_FechaH',
            ],
            'Sello'   => [
                'Descripción' => 'Atributo requerido para contener el sello digital del comprobante fiscal, al que hacen referencia las reglas de resolución miscelánea vigente. El sello debe ser expresado como una cadena de texto en formato Base 64.',
                'Uso' => 'requerido',
                'Valor Prefijado' => 'xs:string',
                'Espacio en Blanco' => 'Colapsar',               
            ],

            'FormaPago' => [
                'Descripción' => 'Atributo condicional para expresar la clave de la forma de pago de los bienes o servicios amparados por el comprobante.',
                'Uso' => 'opcional',
                'Tipo Especial' => 'catCFDI:c_FormaPago',
            ],

            'No.Certificado' => [
                'Descripción' => 'Atributo requerido para expresar el número de serie del certificado de sello digital que ampara al comprobante, de acuerdo con el acuse correspondiente a 20 posiciones otorgado por el sistema del SAT ',
                'Uso' => 'requerido',
                'Longitud' => '20',
                'Tipo Base' => 'xs:string',
                'Espacio en Blanco' => 'Colapsar',
                'Patrón' => '[0-9]{20}',
            ],

            'Certificado' => [
                'Descripción' => 'Atributo requerido que sirve para incorporar el certificado de sello digital que ampara al comprobante, como texto en formato base 64.',
                'Uso' => 'requerido',
                'Tipo Base' => 'xs:string',
                'Espacio en Blanco' => 'Colapsar',
            ],

            'CondicionesDePago'=> [
                'Descripción' => 'Atributo condicional para expresar las condiciones comerciales aplicables para el pago del comprobante fiscal digital por Internet. Este atributo puede ser condicionado mediante atributos o complementos.',
                'Uso' => 'opcional',
                'Longitud Mínima' => '1',
                'Longitud Máxima ' => '1000',
                'Tipo Base' => 'xs:string',
                'Espacio en Blanco' => 'Colapsar',
                'Patrón' => '[^|]{1,1000}',
            ],
            'SubTotal' => [
                'Descripción' => 'Atributo requerido para representar la suma de los importes de los conceptos antes de descuentos e impuesto. No se permiten valores negativos.',
                'Uso' => 'requerido',
                'Tipo Especial' => 'tdCFDI:t_Importe', 
            ],

            'Descuento' => [
                'Descripción' => 'Atributo condicional para representar el importe total de los descuentos aplicables antes de impuestos. No se permiten valores negativos. Se debe registrar cuando existan conceptos con descuento.',
                'Uso' => 'opcional',
                'Tipo Especial' => 'tdCFDI:t_Importe', 
            ],

            'Moneda' => [
                'Descripción' => 'Atributo requerido para identificar la clave de la moneda utilizada para expresar los montos, cuando se usa moneda nacional se registra MXN. Conforme con la especificación ISO 4217.',
                'Uso' => 'requerido',
                'Tipo Especial' => 'catCFDI:c_Moneda', 
            ],

            'TipoCambio' => [
                'Descripción' => 'Atributo condicional para representar el tipo de cambio FIX conforme con la moneda usada. Es requerido cuando la clave de moneda es distinta de MXN y de XXX. El valor debe reflejar el número de pesos mexicanos que equivalen a una unidad de la divisa señalada en el atributo moneda. Si el valor está fuera del porcentaje aplicable a la moneda tomado del catálogo c_Moneda, el emisor debe obtener del PAC que vaya a timbrar el CFDI, de manera no automática, una clave de confirmación para ratificar que el valor es correcto e integrar dicha clave en el atributo Confirmacion. ',
                'Uso' => 'opcional',
                'Tipo Base' => 'xs:decimal',
                'Valor Mínimo Incluyente' => '0.000001',
                'Posiciones Decimales' => '6',
                'Espacio en Blanco' => 'Colapsar',
            ],

            'Total' => [
                'Descripción' => 'Atributo requerido para representar la suma del subtotal, menos los descuentos aplicables, más las contribuciones recibidas (impuestos trasladados - federales y/o locales, derechos, productos, aprovechamientos, aportaciones de seguridad social, contribuciones de mejoras) menos los impuestos retenidos federales y/o locales. Si el valor es superior al límite que establezca el SAT en la Resolución Miscelánea Fiscal vigente, el emisor debe obtener del PAC que vaya a timbrar el CFDI, de manera no automática, una clave de confirmación para ratificar que el valor es correcto e integrar dicha clave en el atributo Confirmacion. No se permiten valores negativos.',
                'Uso' => 'requerido',
                'Tipo Especial' => 'tdCFDI:t_Importe', 
            ],

            'TipoDecomprobante' => [
                'Descripción' => 'Atributo requerido para expresar la clave del efecto del comprobante fiscal para el contribuyente emisor',
                'Uso' => 'requerido',
                'Tipo Especial' => 'catCFDI:c_TipoDeComprobante', 
            ],

            'Exportacion' => [
                'Descripción' => 'Atributo requerido para expresar si el comprobante ampara una operación de exportación',
                'Uso' => 'requerido',
                'Tipo Especial' => 'catCFDI:c_Exportacion', 
            ],

            'MetodoPago' => [
                'Descripción' => 'Atributo condicional para precisar la clave del método de pago que aplica para este comprobante fiscal digital por Internet, conforme al Artículo 29-A fracción VII incisos a y b del CFF.',
                'Uso' => 'opcional',
                'Tipo Especial' => 'catCFDI:c_MetodoPago', 
            ],

            'LugarExpedicion' => [
                'Descripción' => 'Atributo requerido para incorporar el código postal del lugar de expedición del comprobante (domicilio de la matriz o de la sucursal).',
                'Uso' => 'requerido',
                'Tipo Especial' => 'catCFDI:c_CodigoPostal', 
            ],

            'Confirmacion' => [
                'Descripción' => 'Atributo condicional para registrar la clave de confirmación que entregue el PAC para expedir el comprobante con importes grandes, con un tipo de cambio fuera del rango establecido o con ambos casos. Es requerido cuando se registra un tipo de cambio o un total fuera del rango establecido ',
                'Uso' => 'opcional',
                'Tipo Base' => 'xs:string',
                'Longitud' => '5',
                'Espacio en Blanco' => 'Colapsar',
                'Patrón' => '[0-9a-zA-Z]{5}',
            ],
        ],
        'InformacionGlobal' => $InformacionGlobal,
        'CfdiRelacionados' => $CfdiRelacionados,
        'Emisor' => $Emisor,
        'Receptor' => $Receptor,
        'Conceptos' => $Conceptos,
        'Impuestos' => $Impuestos,
        'Complemento' => $Complemento,
        'Addenda' => $Addenda,
        'Cancelacion' => $Cancelacion
    ]
];

dump($cfdi);
