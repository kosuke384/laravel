<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testCountroller;
use App\Http\Middleware\HelloMiddleware;

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

Route::get('index', [testCountroller::class, 'index'])->middleware('hello');
Route::post('other',[testCountroller::class,'other'])->name('other');