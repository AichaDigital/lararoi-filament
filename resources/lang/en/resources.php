<?php

return [
    'vat_verification' => [
        'navigation_label' => 'VAT Verifications',
        'model_label' => 'VAT Verification',
        'plural_model_label' => 'VAT Verifications',

        'sections' => [
            'vat_info' => 'VAT Information',
            'company_info' => 'Company Information',
            'api_info' => 'API Details',
        ],

        'fields' => [
            'vat_code' => 'VAT Code',
            'country_code' => 'Country',
            'is_valid' => 'Valid',
            'company_name' => 'Company Name',
            'company_address' => 'Company Address',
            'api_source' => 'API Source',
            'verified_at' => 'Verified At',
            'created_at' => 'Created At',
        ],

        'values' => [
            'valid' => 'Valid',
            'invalid' => 'Invalid',
        ],
    ],
];
