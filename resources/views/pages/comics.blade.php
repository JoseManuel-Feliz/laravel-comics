@extends("layouts.app")

@section("main-content")

<section>
    <div>
        <!-- <img src="{{URL::asset('images/jumbotron.jpg')}}" alt=""> -->
    </div>
</section>
<section>
    <div class="content-wrapper container">
        <ul>
            @foreach($comics as $comic)
            <li>
                <a href="#">
                    <h3>{{$comic['title']}}</h3>
                    <img src="{{$comic['thumb']}}" alt="$comic['title']">
                    <p>{{$comic['description']}}</p>
                    <p>{{$comic['price']}}</p>
                    <p>{{$comic['series']}}</p>
                    <p>{{$comic['sale_date']}}</p>
                    <p>{{$comic['type']}}</p>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="btn-wrapper">
        <a href="#" class="btn">Load more</a>
    </div>
</section>

<section class="main-navbar">
    <nav class="container">
        <ul>
            <!--   @//foreach() -->
            <li>
            </li>
            <!--   @//endforeach -->
        </ul>
    </nav>

</section>
@endsection