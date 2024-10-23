<header>

    <div class="container">
        <div class="bg-blu">
            <span>
                DC POPWER <small><i class="fa-solid fa-trademark"></i></small>
                VISA <small><i class="fa-regular fa-registered"></i></small>
            </span>

            <span>
                ADDITIONAL SITES <small><i class="fa-solid fa-caret-down"></i></small>
            </span>
        </div>

        <nav class="navbar wrapper">
            <div class="logo-wrapper">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
            </div>

            <ul class="gap-20">
                @foreach($links as $link)
                <li>
                    <a href="#"> {{$link}} </a>
                </li>
                @endforeach
            </ul>

            <div class="input-wrapper">

                <span class="p-absolute">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>

                <input type="text" placeholder="search">
            </div>
        </nav>

    </div>
</header>