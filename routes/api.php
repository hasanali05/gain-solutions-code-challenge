<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RelationController;
use App\Http\Controllers\Api\SubscriberController;
use App\Http\Controllers\Api\SegmentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/segment-relations', [RelationController::class, 'getSegmentRequiredRelations']);

Route::apiResources([
    'segments' => SegmentController::class,
]);

Route::get('/subscribers', [SubscriberController::class, 'index']);