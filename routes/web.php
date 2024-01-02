<?php

use App\Http\Controllers\API\GroomingController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use function PHPSTORM_META\type;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.auth.auth-login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.app.dashboard', ['type_menu' => '']);
    })->name('home');
    Route::resource('Item', ItemController::class);
    Route::get('/katalogs', [KatalogController::class, 'index']);
    Route::get('/products/add', [ProductController::class, 'add']);
});
Route::get('/orders', [OrderController::class, 'index']);
Route::get('/orders/{id}', [OrderController::class, 'show']);
Route::get('/orders/add', [OrderController::class, 'add']);
Route::post('/orders', [OrderController::class, 'store']);
Route::get('/orders/{id}/edit', [OrderController::class, 'edit']);
Route::post('/orders/{id}', [OrderController::class, 'update']);
Route::delete('/orders/{id}', [OrderController::class, 'destroy']);

// Products
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}/show', [ProductController::class, 'show']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::post('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);


// Route::get('item', function () {
//     return view('item', ['type_menu' => 'item']);
// })->name('item');
