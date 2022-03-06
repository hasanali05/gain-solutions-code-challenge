<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Segment extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'rules' => 'required|array',
            'rules.*' => 'required|array',
            'rules.*.*' => 'required|array',
            'rules.*.*.id' => 'nullable|numeric|exists:rules,id',
            'rules.*.*.field' => 'required|numeric|min:0',
            'rules.*.*.operator' => 'required|numeric|min:0',
            'rules.*.*.first_query' => 'required|string',
            'rules.*.*.second_query' => 'nullable|string',
        ];
    }
}
