<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testCountroller;
use App\Http\Controllers\PersonController;
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
Route::get('create',[testCountroller::class,'create'])->name('create');
Route::post('create',[testCountroller::class,'store']);
Route::get('edit',[testCountroller::class,'edit'])->name('edit');
Route::post('edit',[testCountroller::class,'update']);
Route::get('delete',[testCountroller::class,'delete'])->name('delete');
Route::post('destroy',[testCountroller::class,'destroy']);
Route::get('show',[testCountroller::class,'show'])->name('show');

Route::get('person',[PersonController::class,'index']);
Route::get('person/find',[PersonController::class,'find']);
Route::post('person/find',[PersonController::class,'search']);
Route::get('person/add',[PersonController::class,'add']);
Route::post('person/add',[PersonController::class,'create']);
Route::get('person/edit',[PersonController::class,'edit']);
Route::post('person/edit',[PersonController::class,'update']);
Route::get('person/del',[PersonController::class,'delete']);
Route::post('person/del',[PersonController::class,'destroy']);

