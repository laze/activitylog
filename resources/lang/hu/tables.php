<?php

return [
    'columns' => [
        'log_name' => [
            'label' => 'Típus',
        ],
        'event' => [
            'label' => 'Esemény',
        ],
        'subject_type' => [
            'label'        => 'Tárgy',
            'soft_deleted' => ' (Átmenetileg törölve)',
            'deleted'      => ' (Törölve)',
        ],
        'causer' => [
            'label' => 'Felhasználó',
        ],
        'properties' => [
            'label' => 'Tulajdonságok',
        ],
        'created_at' => [
            'label' => 'Naplózva ekkor',
        ],
    ],
    'filters' => [
        'created_at' => [
            'label'                   => 'Naplózva ekkor',
            'created_from'            => 'Létrehozva ettől',
            'created_from_indicator'  => 'Létrehozva ettől: :created_from',
            'created_until'           => 'Létrehozva eddig',
            'created_until_indicator' => 'Létrehozva eddig: :created_until',
        ],
        'event' => [
            'label' => 'Esemény',
        ],
    ],
];