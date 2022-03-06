<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    protected $fillable = [
        'name'
    ];
    
    public function scopeStoreSegment($query, $validated)
    {
        $segment = $query->create([
            'name' => $validated['name'],
        ]);

        $rules = $this->getRules($validated['rules']);
        $segment->rules()->saveMany($rules);
        return $segment;
    }

    public function scopeUpdateSegment($query, $segment, $validated)
    {
        $segment->update([
            'name' => $validated['name'],
        ]);

        $segment->rules()->delete();
        $rules = $this->getRules($validated['rules']);
        $segment->rules()->saveMany($rules);
        return $segment;
    }

    public static function getRules($ruleList = [])
    {
        $rules = collect([]);
        foreach ($ruleList as $key => $ruleLine) {
            foreach ($ruleLine as $ruleData) {
                $rule = Rule::updateOrCreate([
                    'id' => $ruleData['id'],
                    'line' => $key, // logic line number
                    'field' => $ruleData['field'],
                    'operator' => $ruleData['operator'],
                    'first_query' => $ruleData['first_query'],
                    'second_query' => $ruleData['second_query'],
                ]);
                $rules->push($rule);
            }
        }
        return $rules;
    }

    public function rules()
    {
        return $this->hasMany(Rule::class, 'segment_id', 'id');
    }
}
