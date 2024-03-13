

@extends('layouts.app')
@section('main-content')
<div id="show">
    <div class="container">
        <div class="left">
        <img src="{{$comic['thumb']}}" alt="">
        </div>
        <div class="right">
            <h1>{{$comic['title']}}</h1>
            <p><strong>Descrizione:</strong>{{$comic['description']}}</p>
            <div>
                <h4>Prezzo:{{$comic['price']}}</h4>
                <h4>Data di rilascio:{{$comic['sale_date']}}</h4>
                <h4>Autori:{{$comic['artists']}}</h4>
                <h4>Scrittori:{{$comic['writers']}}</h4>
            </div>
        </div>
    </div>
</div>

@endsection
    
