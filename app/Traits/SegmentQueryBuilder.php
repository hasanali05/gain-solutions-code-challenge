<?php

namespace App\Traits;

use App\Models\Segment;

trait SegmentQueryBuilder
{
    public function scopeSegmentQuery($query, $segment_id = null)
    {
        $segment = Segment::with('rules')->find($segment_id);

        if(!$segment) return $query;

        $rule_lines = $segment->rules->groupBy('line')->values();

        foreach($rule_lines as $rules) {
            $query->where(function($query_in) use ($rules) {
                foreach ($rules as $key => $rule) {
                    $operator_key = $rule->operator;
                    $field_key = $rule->field;
                    $first_query = $rule->first_query;
                    $second_query = $rule->second_query;
                    
                    $fields = \App\Constant\Field::FIELDS;
                    $operators = \App\Constant\Operator::OPERATORS;

                    if(!isset($operators[$operator_key])) continue;
                    if(!isset($fields[$field_key])) continue;

                    $field = $fields[$field_key]['name'];
                    $operator = $operators[$operator_key]['operator'];

                    if($key == 0) {
                        $query_in->where(function($query_segment) use ($operator, $field, $first_query, $second_query) {
                            $query_segment->applySegmentQuery($operator, $field, $first_query, $second_query);
                        });
                    } else {
                        $query_in->orWhere(function($query_segment) use ($operator, $field, $first_query, $second_query) {
                            $query_segment->applySegmentQuery($operator, $field, $first_query, $second_query);
                        });
                    }
                }
            });
        }

        return $query;
    }

    public function scopeApplySegmentQuery($query, $operator = '', $field = '', $first_query = '', $second_query = '')
    {
        switch ($operator) {
            case 'is':
                $query->applyIsQuery($field, $first_query);
                break;
            case 'is_not':
                $query->applyIsNotQuery($field, $first_query);
                break;
            case 'starts_with':
                $query->applyStartWithQuery($field, $first_query);
                break;
            case 'ends_with':
                $query->applyEndsWithQuery($field, $first_query);
                break;
            case 'contains':
                $query->applyContainsQuery($field, $first_query);
                break;
            case 'doesnot_starts_with':
                $query->applyDoesnotStartWithQuery($field, $first_query);
                break;
            case 'doesnot_end_with':
                $query->applyDoesnotEndsWithQuery($field, $first_query);
                break;
            case 'doesnot_contains':
                $query->applyDoesnotContainsQuery($field, $first_query);
                break;
            case 'before':
                $query->applyBeforeQuery($field, $first_query);
                break;
            case 'on':
                $query->applyOnQuery($field, $first_query);
                break;
            case 'after':
                $query->applyAfterQuery($field, $first_query);
                break;
            case 'on or before':
                $query->applyOnOrBeforeQuery($field, $first_query);
                break;
            case 'on or after':
                $query->applyOnOrAfterQuery($field, $first_query);
                break;
            case 'between':
                $query->applyBetweenQuery($field, $first_query, $second_query);
                break;
        }
        return $query;
    }

    public function scopeApplyIsQuery($query, $field = '', $first_query = '')
    {
        return $query->where($field, '=', $first_query);
    }

    public function scopeApplyIsNotQuery($query, $field = '', $first_query = '')
    {
        return $query->where($field, '!=', $first_query);
    }

    public function scopeApplyStartWithQuery($query, $field = '', $first_query = '')
    {
        return $query->where($field, 'LIKE', "$first_query%");
    }

    public function scopeApplyEndsWithQuery($query, $field = '', $first_query = '')
    {
        return $query->where($field, 'LIKE', "%$first_query");
    }

    public function scopeApplyContainsQuery($query, $field = '', $first_query = '')
    {
        return $query->where($field, 'LIKE', "%$first_query%");
    }

    public function scopeApplyDoesnotStartWithQuery($query, $field = '', $first_query = '')
    {
        return $query->where($field, 'NOT LIKE', "$first_query%");
    }

    public function scopeApplyDoesnotEndsWithQuery($query, $field = '', $first_query = '')
    {
        return $query->where($field, 'NOT LIKE', "%$first_query");
    }

    public function scopeApplyDoesnotContainsQuery($query, $field = '', $first_query = '')
    {
        return $query->where($field, 'NOT LIKE', "%$first_query%");
    }

    public function scopeApplyBeforeQuery($query, $field = '', $first_query = '')
    {
        return $query->whereDate($field, '<', $first_query);
    }

    public function scopeApplyOnQuery($query, $field = '', $first_query = '')
    {
        return $query->whereDate($field, '=', $first_query);
    }

    public function scopeApplyAfterQuery($query, $field = '', $first_query = '')
    {
        return $query->whereDate($field, '>', $first_query);
    }

    public function scopeApplyOnOrBeforeQuery($query, $field = '', $first_query = '')
    {
        return $query->whereDate($field, '<=', $first_query);
    }

    public function scopeApplyOnOrAfterQuery($query, $field = '', $first_query = '')
    {
        return $query->whereDate($field, '>=', $first_query);
    }

    public function scopeApplyBetweenQuery($query, $field = '', $first_query = '', $second_query = '')
    {
        // swap if first one is bigger then second one.
        if($first_query > $second_query) {
            $temporary = $first_query;
            $first_query = $second_query;
            $second_query = $temporary;
        }
        return $query->whereDate($field, '>=', $first_query)
                    ->whereDate($field, '<=', $second_query);
    }
}
