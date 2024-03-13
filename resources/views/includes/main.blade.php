<section>
    <div class=" card-container container">
        
        @foreach ($comics as $comic)
        <a href="{{route('comics.index')}}">
           <div class="card">
               <img src="{{$comic->thumb}}" alt="">
               <h5>{{$comic->title}}</h5>  
            </div>  
        </a>                                                     
        @endforeach
    </div>
</section>