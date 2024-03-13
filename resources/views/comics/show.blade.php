


<div id="show">
    
        <div id="description">
        <div id="left-description" >
            <h1>{{$comic['title']}}</h1>
            <div id="availability"> 
                <div>         
                    <span>U.S Price {{$comic['price']}}<span> 
                </div>
                <div>
                    <span>AVAILABLE</span>
                   <button>Check Availability</button>
                </div>
            </div>
            <p>{{$comic['description']}}</p>
        </div>
        <div id="right-description">
            <div id="image">
                <img src="{{$comic['thumb']}}" alt="">
            </div>
        </div>
    </div>
    <div id="container-info">
    <div id="info">
        <div id="talent">
            <div>
            <h3>Talent</h3>
        </div>
            <div>
                <h5>Art by:</h5>
           <p>{{$comic['artists']}}</p>
        </div>
        <div>
            <h5>Written by:</h5>
            <p>{{$comic['writers']}}</p>
        </div>
        <div id="spec">
            <h3>Specs</h3>
            <div><h5>Series:</h5>
                <span>{{$comic['series']}}</span>
            </div>
            <div><h5>U.S.Price:</h5>
                <span>{{$comic['price']}}</span>
            </div>
            <div><h5>On Sale Date:</h5>
                <span>{{$comic['sale_date']}}</span>
            </div>
        </div>
    </div>
</div>
</div>
    
