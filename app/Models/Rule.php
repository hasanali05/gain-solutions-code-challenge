<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = [
        'segment_id', 
        'line', 
        'field', 
        'operator', 
        'first_query', 
        'second_query'
    ];
}
