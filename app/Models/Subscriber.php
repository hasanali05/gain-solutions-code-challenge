<?php

namespace App\Models;

use App\Traits\SegmentQueryBuilder;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use SegmentQueryBuilder;
    
    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'birth_day'
    ];
}
