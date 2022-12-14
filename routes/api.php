<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\StatusController;
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

Route::get('/people', [ApiController::class, 'showAll']);

Route::get('/people/{id}', [ApiController::class, 'showOne']);

Route::get('/statuses', [StatusController::class, 'index']);
