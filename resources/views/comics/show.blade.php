

@extends('layouts.app')
@section('main-content')
<div id="show">
    <div class="container">
        <div class="left">
        <img class="img-fluid" src="{{$comic['thumb']}}" alt="immagine fumetto">
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
            <div class="d-flex">
            <a class="btn btn-info" href="{{route('home')}}">Torna alla Home</a>
            <a class="btn btn-warning" href="{{route('comics.edit', $comic)}}">Modifica</a>
        </div>
        
        </div>
    </div>
</div>

@endsection
    
