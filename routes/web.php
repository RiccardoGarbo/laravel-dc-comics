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
//Rotta Create
Route::get('/comics/create' , [ComicController::class , 'create'])->name('comics.create');
//Rotta Store
Route::post('/comics', [ComicController::class , 'store'])->name('comics.store');
//Rotta Edit
Route::get('/comics/{comic}/edit' , [ComicController::class , 'edit'])->name('comics.edit');
//Rotta update
Route::put('/comics/{comic}' , [ComicController::class , 'update'])->name('comics.update');



