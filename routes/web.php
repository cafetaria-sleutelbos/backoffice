<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ApiKeysController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

//logged in
Route::middleware(['auth'])->group(function () {
    Route::resource('/orders', OrderController::class);
    Route::resource('/items', ItemController::class);
    Route::resource('/api-keys', ApiKeysController::class);
});
