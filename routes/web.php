<?php

use App\Http\Controllers\customerController;
use App\Http\Controllers\customerQueueController;
use App\Http\Controllers\reviveController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customer/all', [customerController::class, 'index']);
Route::get('/customer/detail/{customer}', [customerController::class, 'show']); 

Route::get('/revive/all', [reviveController::class, 'index']);
Route::get('/revive/detail/{revive}', [reviveController::class, 'show']);

Route::get('/customer_queue/all', [customerQueueController::class, 'index']);
Route::get('/customer_queue/detail/{customer_queue}', [customerQueueController::class, 'show']);
