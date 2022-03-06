<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RuleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $fields = \App\Constant\Field::FIELDS;
        $field = $fields[$this->field] ?? '';
        $type = $field['type'] ?? '';
        return [
            'id' => $this->id,
            'type' => $type,
            'line' => $this->line,
            'field' => $this->field,
            'operator' => $this->operator,
            'first_query' => $this->first_query,
            'second_query' => $this->second_query,
        ];
    }
}
