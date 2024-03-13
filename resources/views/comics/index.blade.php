@extends('layouts.app')
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
@endsection