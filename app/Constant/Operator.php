<?php

namespace App\Constant;

class Operator
{
    // operator type, operator
    // logic will develop based on this type.

    const OPERATORS = [
        '0'=> [
            'type' => 'text',
            'operator' => 'is',
        ],
        '1'=> [
            'type' => 'text',
            'operator' => 'is_not',
        ],
        '2'=> [
            'type' => 'text',
            'operator' => 'starts_with',
        ],
        '3'=> [
            'type' => 'text',
            'operator' => 'ends_with',
        ],
        '4'=> [
            'type' => 'text',
            'operator' => 'contains',
        ],
        '5'=> [
            'type' => 'text',
            'operator' => 'doesnot_starts_with',
        ],
        '6'=> [
            'type' => 'text',
            'operator' => 'doesnot_end_with',
        ],
        '7'=> [
            'type' => 'text',
            'operator' => 'doesnot_contains',
        ],
        '8'=> [
            'type' => 'date',
            'operator' => 'before',
        ],
        '9'=> [
            'type' => 'date',
            'operator' => 'on',
        ],
        '10'=> [
            'type' => 'date',
            'operator' => 'after',
        ],
        '11'=> [
            'type' => 'date',
            'operator' => 'on or before',
        ],
        '12'=> [
            'type' => 'date',
            'operator' => 'on or after',
        ],
        '13'=> [
            'type' => 'date',
            'operator' => 'between',
        ],
    ];
}
