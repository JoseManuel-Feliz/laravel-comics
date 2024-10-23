<footer>
    <div class="bg-wrapper">

        <div class="container">

            <div class="wrapper">

                <nav class="footer-navbar">

                    @foreach($footer_nav as $key => $links )
                    <ul>
                        <li>
                            <h5> {{$key}}</h5>
                            <ul>
                                @foreach($links as $link)
                                <li>
                                    {{$link}}
                                </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    @endforeach
                </nav>
            </div>
        </div>
    </div>

    <div class="bg-grey">

        <div class="container social-links">
            <a href="#" class="btn">SIGN-UP NOW!</a>

            <div class="socials-links">
                <ul>
                    @foreach($footer_img as $img)
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('resources/img/footer-').$img}}" alt="{{$img}}">
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>