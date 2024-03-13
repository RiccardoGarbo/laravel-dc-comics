<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
class HomeController extends Controller
{
    public function __invoke()
    {
    $comics = Comic::all();
    $header_links =['characters','comics','movies','tv','games','videos','news','shop'];
    $dc_comics_links = ['Characters','Comics','Movies','TV','Games','Videos','News'];
    $shop_links = ['Shop DC','Shop DC Collectibles'];
    $dc_links = ['Term Of Use', 'Privacy policy(New)','Ad Choices','Advertosing','Jobs','Subscriptions','Talent WorkShops','CPSC Certificates','Ratings','Shop Help','Contact Us'];
    $sites_links =['DC','MAD Magazine','DC kids','DC Universe','DC Power Visa'];

    return view('home', compact('comics', 'header_links' , 'dc_comics_links' , 'dc_links' ,'shop_links', 'dc_comics_links', 'sites_links'));
}
};
