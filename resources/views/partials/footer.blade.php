<?php
    $links = config('comics2.footer');
?>
<footer>
<div class="first-footer">
    <div class="container d-flex align-items-center justify-content-between container-list">
        <div class="box-list">
            @foreach ($links as $link)
            <div class="list">
                <div>
                    <h3>{{$link['title']}}</h3>
                </div>
                <div>
                    <ul class="p-0">
                        @foreach ($link['links'] as $list)
                        <li>
                            <a class="text-capitalize" href="{{$list['url']}}">{{$list['text']}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
        <div>
            <img src="{{ Vite::asset('/resources/img/dc-logo-bg.png') }}" alt="DC Logo Background">
        </div>
    </div>
    <div class="container">
        <p>All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="">noted here</a>. All rigths reserved.<br> <a href="">Cookies Settings</a></p>
    </div>
</div>
<div class="second-footer">
    <div class="container d-flex align-items-center justify-content-between">
        <div>
            <button>sign-up now!</button>
        </div>
        <div class="social d-flex align-items-center">
            <span>follow us</span>
            <a href="#nogo"><img src="{{ Vite::asset('/resources/img/footer-facebook.png') }}" alt="Facebook"></a>
            <a href="#nogo"><img src="{{ Vite::asset('/resources/img/footer-twitter.png') }}" alt="Twitter"></a>
            <a href="#nogo"><img src="{{ Vite::asset('/resources/img/footer-youtube.png') }}" alt="YouTube"></a>
            <a href="#nogo"><img src="{{ Vite::asset('/resources/img/footer-pinterest.png') }}" alt="Pinterest"></a>
            <a href="#nogo"><img src="{{ Vite::asset('/resources/img/footer-periscope.png') }}" alt="Periscope"></a>
        </div>
    </div>
</div>
</footer>