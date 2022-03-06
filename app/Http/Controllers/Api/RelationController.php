<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function getSegmentRequiredRelations(Request $request)
    {
        $fields = \App\Constant\Field::FIELDS;
        $operators = \App\Constant\Operator::OPERATORS;
        return response()->json([
            'fields' => $fields,
            'operators' => $operators,
        ]);
    }
}
