<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComicController;

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
//Rotta app
Route::get('/app', function () {
    return view('layouts.app');
})->name('app');


//Rotta Home 
Route::get('/', HomeController::class)->name('home');

//Rotta Index
Route::get('/comics', [ComicController::class , 'index'])->name('comics.index');
//Rotta Show
Route::get('/comics{comic}', [ComicController::class , 'show'])->name('comics.show');





