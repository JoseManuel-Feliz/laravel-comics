@extends("layouts.app")

@section("cdn")
<!-- FONT AWESOME ICONS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css'
    integrity='sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=='
    crossorigin='anonymous' />

@endsection

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

                <div class="comic-img">
                    <img src="{{$comic['thumb']}}" alt="$comic['title']">
                </div>
                <h3>{{$comic['title']}}</h3>
                <p>{{$comic['price']}}</p>
                <p>{{$comic['series']}}</p>
                <p>{{$comic['sale_date']}}</p>
                <p>{{$comic['type']}}</p>

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