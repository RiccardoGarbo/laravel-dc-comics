@extends('layouts.app')
<h1 class="text-center">Lista di tutti i nostri fumetti!</h1>
@section('main-content')
<section id="index">
    <div class=" card-container container">
        @foreach ($comics as $comic)
        <a href="{{route('comics.show', $comic->id)}}">
           <div class="card d-flex">
               <img src="{{$comic->thumb}}" alt="">
               <h5>{{$comic->title}}</h5>  
            </div>  
        </a>                                                     
        @endforeach
    </div>
</section>   
<div  class="my-3 d-flex">
    <a class="btn btn-info" href=" {{route('home')}}">Torna indietro</a>
</div>
@endsection