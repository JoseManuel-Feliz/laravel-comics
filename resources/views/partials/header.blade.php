<header>

    <div class="bg-blu">
        <span>
            DC POPWER <small>logo font awesome</small>
            VISA <small>logo font awesome</small>
        </span>

        <span>
            ADDITIONAL SITES <small>logo font awesome</small>
        </span>
    </div>
    <div class="container">

        <nav class="navbar wrapper">
            <div class="logo-wrapper">
                <img src="{{URL::asset('images/dc-logo.png')}}" alt="">
            </div>

            <ul class="gap-20">
                @foreach($links as $link)
                <li>
                    <a href="#"> {{$link}} </a>
                </li>
                @endforeach
            </ul>

            <div>
                <input type="text" placeholder="Search">
            </div>
        </nav>

    </div>
</header>