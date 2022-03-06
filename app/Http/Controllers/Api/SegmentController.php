<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Segment as RequestsSegment;
use App\Http\Resources\SegmentResource;
use App\Models\Segment;
use Illuminate\Http\Request;

class SegmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $segments = Segment::with('rules')->get();
        return SegmentResource::collection($segments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestsSegment $request)
    {
        $validated = $request->validated();
        // validate request
        // store to database
        $segment = Segment::storeSegment($validated);
        return new SegmentResource($segment);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Segment $segment)
    {
        $segment->load('rules');
        return new SegmentResource($segment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestsSegment $request, Segment $segment)
    { 
        $validated = $request->validated();
        $segment->updateSegment($segment, $validated);
        return new SegmentResource($segment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
