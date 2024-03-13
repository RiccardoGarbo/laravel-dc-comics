<?php

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
//Rotta app
Route::get('/app', function () {
    return view('layouts.app');
})->name('app');
//Rotta Home 
Route::get('/', function () {
    $header_links =['characters','comics','movies','tv','games','videos','news','shop'];
    $dc_comics_links = ['Characters','Comics','Movies','TV','Games','Videos','News'];
    $shop_links = ['Shop DC','Shop DC Collectibles'];
    $dc_links = ['Term Of Use', 'Privacy policy(New)','Ad Choices','Advertosing','Jobs','Subscriptions','Talent WorkShops','CPSC Certificates','Ratings','Shop Help','Contact Us'];
    $sites_links =['DC','MAD Magazine','DC kids','DC Universe','DC Power Visa'];
    return view('home', ['header_links' =>$header_links,'dc_comics_links'=> $dc_comics_links,'shop_links'=> $shop_links,'dc_links'=> $dc_links,'sites_links'=>$sites_links]);
})->name('home');


//Rotta Comic

Route::get('/comic' , function(){;
})->name('comic.show');


