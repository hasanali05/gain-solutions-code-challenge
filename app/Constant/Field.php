<?php

namespace App\Constant;

class Field
{
    // field type, name
    const FIELDS = [
        '0'=> [
            'type' => 'text',
            'name' => 'first_name',
        ],
        '1'=> [
            'type' => 'text',
            'name' => 'last_name',
        ],
        '2'=> [
            'type' => 'text',
            'name' => 'email',
        ],
        '3'=> [
            'type' => 'date',
            'name' => 'created_at',
        ],
        '4'=> [
            'type' => 'date',
            'name' => 'birth_day',
        ],
    ];
}