<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubscriberResource;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $validated = $request->validate([
            'segment_id' => 'nullable|numeric|exists:segments,id',
            'page' => 'nullable|numeric'
        ]);
        
        $segment_id = $validated['segment_id'];
        $subscribers = Subscriber::segmentQuery($segment_id)->get();
        return SubscriberResource::collection($subscribers);
    }
}
