<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    protected $fillable = [
        'name'
    ];
    
    public function rules()
    {
        return $this->hasMany(Rule::class, 'segment_id', 'id');
    }
}
