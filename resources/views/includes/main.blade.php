<section>
    <div class=" card-container container">

        @foreach ($comics as $comic)
        <a href="{{route('comics.index')}}">
           <div>
               <img src="{{$comic->thumb}}" alt="">
               <h5 class="text-white" >{{$comic->title}}</h5>  
            </div>  
        </a>                                                     
        @endforeach
        <a class="btn btn-success py-3" type="button" href="{{route('comics.create')}}">Aggiungi Fumetto!</a>
    </div>
</section>