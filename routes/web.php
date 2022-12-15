<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ApiKeysController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LiveController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ScanController;
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
Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

//logged in
Route::middleware(['auth'])->group(function () {
    Route::resource('/scans', ScanController::class);
    Route::get('/scans-export', [ScanController::class, 'export']);
    Route::resource('/orders', OrderController::class);
    Route::resource('/items', ItemController::class);
    Route::resource('/api-keys', ApiKeysController::class);
});
