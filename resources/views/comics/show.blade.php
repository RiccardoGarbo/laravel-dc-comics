

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
                <h4><span>Prezzo:</span>{{$comic['price']}}</h4>
                <h4><span>Data di rilascio:</span>{{$comic['sale_date']}}</h4>
                <h4><span>Autori:</span>{{$comic['artists']}}</h4>
                <h4><span>Scrittori:</span>{{$comic['writers']}}</h4>
            </div>
            <a href="{{route('home')}}">Torna alla Home</a>
        </div>
    </div>
</div>

@endsection
    
