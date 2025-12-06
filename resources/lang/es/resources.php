<?php

return [
    'vat_verification' => [
        'navigation_label' => 'Verificaciones NIF-IVA',
        'model_label' => 'Verificación NIF-IVA',
        'plural_model_label' => 'Verificaciones NIF-IVA',

        'sections' => [
            'vat_info' => 'Información del NIF-IVA',
            'company_info' => 'Información de la Empresa',
            'api_info' => 'Detalles de la API',
        ],

        'fields' => [
            'vat_code' => 'Código NIF-IVA',
            'country_code' => 'País',
            'is_valid' => 'Válido',
            'company_name' => 'Nombre de Empresa',
            'company_address' => 'Dirección de Empresa',
            'api_source' => 'Fuente API',
            'verified_at' => 'Verificado el',
            'created_at' => 'Creado el',
        ],

        'values' => [
            'valid' => 'Válido',
            'invalid' => 'Inválido',
        ],
    ],
];
