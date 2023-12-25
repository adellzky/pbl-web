<?php

use App\Http\Controllers\API\GroomingController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ItemController;
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
    Route::resource('Grooming' , GroomingController::class);
});


// Route::get('item', function () {
//     return view('item', ['type_menu' => 'item']);
// })->name('item');
