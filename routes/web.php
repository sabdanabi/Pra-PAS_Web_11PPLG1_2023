<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooklitsController;
use App\Http\Controllers\GuardlitsController;

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

Route::get('/all/booklist',[BooklitsController:: class,'index']);

Route::get('/booklits/detail/{id}',[\App\Http\Controllers\BooklitsController::class,'show']);


Route::get('/all/guardlist',[GuardlitsController:: class,'index']);

Route::get('/guardlist/detailguard/{id}',[\App\Http\Controllers\GuardlitsController::class,'show']);

