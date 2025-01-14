@extends("layouts.app")

@section("cdn")
<!-- GOOGLE FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2
    ?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

<!-- FONT AWESOME ICONS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css'
    integrity='sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=='
    crossorigin='anonymous' />

@endsection

@section("main-content")

<section>
    <div class="jumbotrom">
    </div>
</section>
<section>
    <div class="content-wrapper container">
        <ul>
            @foreach($comics as $index => $comic)
            <li>

                <a href="{{route('comic', $index)}}">
                    <div class="comic-img">
                        <img src="{{$comic['thumb']}}" alt="$comic['title']">
                    </div>
                    <p>{{$comic['title']}}</p>
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