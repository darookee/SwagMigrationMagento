<?php declare(strict_types=1);

return [
    0 => [
        'attribute_id' => '199',
        'entity_type_id' => '4',
        'attribute_code' => 'decor_type',
        'attribute_model' => null,
        'backend_model' => null,
        'backend_type' => 'int',
        'backend_table' => null,
        'frontend_model' => null,
        'frontend_input' => 'select',
        'frontend_label' => 'Decor Type',
        'frontend_class' => null,
        'source_model' => 'eav/entity_attribute_source_table',
        'is_required' => '0',
        'is_user_defined' => '1',
        'default_value' => '',
        'is_unique' => '0',
        'note' => null,
        'defaultLocale' => 'de-DE',
        'options' => [
            0 => [
                'option_id' => '186',
                'value' => 'Vase',
            ],
            1 => [
                'option_id' => '187',
                'value' => 'Bowl',
            ],
            2 => [
                'option_id' => '188',
                'value' => 'Platter',
            ],
            3 => [
                'option_id' => '214',
                'value' => 'N/A',
            ],
            4 => [
                'option_id' => '217',
                'value' => 'Throw',
            ],
        ],
    ],
    1 => [
        'attribute_id' => '205',
        'entity_type_id' => '4',
        'attribute_code' => 'accessories_type',
        'attribute_model' => null,
        'backend_model' => null,
        'backend_type' => 'text',
        'backend_table' => null,
        'frontend_model' => null,
        'frontend_input' => 'textarea',
        'frontend_label' => 'Accessories Type',
        'frontend_class' => null,
        'source_model' => null,
        'is_required' => '0',
        'is_user_defined' => '1',
        'default_value' => null,
        'is_unique' => '0',
        'note' => null,
        'defaultLocale' => 'de-DE',
    ],
    2 => [
        'attribute_id' => '213',
        'entity_type_id' => '4',
        'attribute_code' => 'attrbool',
        'attribute_model' => null,
        'backend_model' => null,
        'backend_type' => 'int',
        'backend_table' => null,
        'frontend_model' => null,
        'frontend_input' => 'boolean',
        'frontend_label' => 'Mein Bool',
        'frontend_class' => null,
        'source_model' => 'eav/entity_attribute_source_boolean',
        'is_required' => '0',
        'is_user_defined' => '1',
        'default_value' => '0',
        'is_unique' => '0',
        'note' => null,
        'defaultLocale' => 'de-DE',
    ],
    3 => [
        'attribute_id' => '210',
        'entity_type_id' => '4',
        'attribute_code' => 'teestattrib',
        'attribute_model' => null,
        'backend_model' => null,
        'backend_type' => 'varchar',
        'backend_table' => null,
        'frontend_model' => null,
        'frontend_input' => 'text',
        'frontend_label' => 'as',
        'frontend_class' => null,
        'source_model' => null,
        'is_required' => '0',
        'is_user_defined' => '1',
        'default_value' => 'ROO',
        'is_unique' => '0',
        'note' => null,
        'defaultLocale' => 'de-DE',
    ],
    4 => [
        'attribute_id' => '214',
        'entity_type_id' => '4',
        'attribute_code' => 'attrdatetime',
        'attribute_model' => null,
        'backend_model' => 'eav/entity_attribute_backend_datetime',
        'backend_type' => 'datetime',
        'backend_table' => null,
        'frontend_model' => 'eav/entity_attribute_frontend_datetime',
        'frontend_input' => 'date',
        'frontend_label' => 'Meine Zeit',
        'frontend_class' => null,
        'source_model' => null,
        'is_required' => '0',
        'is_user_defined' => '1',
        'default_value' => null,
        'is_unique' => '0',
        'note' => null,
        'defaultLocale' => 'de-DE',
    ],
];
