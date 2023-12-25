<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\GroomingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\itemController;
use App\Http\Resources\GroomingResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware(['auth:sanctum']);

Route::post('/customer/register', [CustomerController::class, 'register']);
Route::post('/customer/login', [CustomerController::class, 'login']);
Route::post('/customer/logout', [CustomerController::class, 'logout'])->middleware(['auth:sanctum']);



// Route::get('/items', [itemController::class, 'index']);
// Route::post('/additems', [itemController::class, 'store']);
// Route::put('/updateitems', [itemController::class, 'update']);

Route::resource('item', itemController::class);

Route::resource('grooming', GroomingController::class);
