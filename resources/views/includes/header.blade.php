<header class="container">
    <picture><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""></picture>
    <nav>
        <ul class="fs-5">
            @foreach ($header_links as $link )  
            <a href="#">                      
                <li>{{$link}}                                                       
                </li>
            </a> 
                @endforeach
           
        </ul>
    </nav>
</header>