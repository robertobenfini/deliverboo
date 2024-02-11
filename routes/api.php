<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\TypologyController;
use App\Http\Controllers\Api\RestaurantController;

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

Route::get('restaurants', [RestaurantController::class, 'index'])->name('api.restaurants.index');
Route::get('restaurants/{id}', [RestaurantController::class, 'show'])->name('api.restaurants.show');

Route::get('typologies', [TypologyController::class, 'index'])->name('api.typologies.index');

Route::get('orders', [OrderController::class, 'index'])->name('api.orders.index');
Route::post('orders', [OrderController::class, 'store'])->name('api.orders.store');