<section class="py-5">
    <div class=" card-container container">
        @foreach ($comics as $comic)
        <a href="{{route('comics.index')}}">
           <div>
               <img src="{{$comic->thumb}}" alt="">
               <h5 class="text-white" >{{$comic->title}}</h5>  
            </div>  
        </a>                                                     
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
    <a class="btn btn-success py-3" type="button" href="{{route('comics.create')}}">Aggiungi Fumetto!</a>
</div>
</section>