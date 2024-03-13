<header class="container">
    <picture><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""></picture>
    <nav>
        <ul>
            <li>@foreach ($header_links as $link )                         
                <li>{{$link}}                                                        
                </li>
                @endforeach
            </li>
        </ul>
    </nav>
</header>