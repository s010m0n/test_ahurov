<?php

use App\Http\Controllers\API\V1\Booking\BookingController;
use App\Http\Controllers\API\V1\Calculate\CalculateController;
use App\Http\Controllers\API\V1\Location\LocationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('location_list', [LocationController::class, 'index']);
Route::get('location_show', [LocationController::class, 'show']);
Route::post('calculate', [CalculateController::class, 'calculate']);
Route::post('booking_blocks', [BookingController::class, 'store']);
Route::get('booking_list', [BookingController::class,'index']);
Route::get('booking_show', [BookingController::class, 'show']);
