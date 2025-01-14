@extends('layouts.app')

@section('main-content')

<div class="comic-img">
    <img src="{{$comic['thumb']}}" alt="$comic['title']">
</div>
<h3>{{$comic['title']}}</h3>

<p>{{$comic['description']}}</p>
<p>{{$comic['price']}}</p>
<p>{{$comic['series']}}</p>
<p>{{$comic['sale_date']}}</p>
<p>{{$comic['type']}}</p>


@endsection