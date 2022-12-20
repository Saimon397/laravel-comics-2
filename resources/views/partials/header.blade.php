<?php
    $links = config('comics2.navbar');
?>

<div class="d-flex bg-primary">
    <div class="container">
        <ul class="text-white d-flex list-unstyled justify-content-end m-0 f-size">
            <li class="me-3">DC POWER &trade; VISA &copy;</li>
            <li>Additional dc site</li>
        </ul>
    </div>
</div>
<header class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <div class="logo">
            <a href="{{route('home')}}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
            </a>
        </div>
        <nav class="navbar-nav container navbar-light">
            <ul class="d-flex list-unstyled justify-content-end gap-5 text-uppercase fw-bold m-0">
                @foreach ($links as $link)
                    <li class="nav-item links">
                        <a class="{{(Route::currentRouteName() == $link['url'] || (Route::currentRouteName() == 'single-page' && $link['url'] == 'comics'))  ? 'active' : ''}}"  href="{{route($link['url'])}}">{{$link['text']}}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header> 

<section id="jumbo">
    <div class="jumbo container">
        
    </div>
</section>


<style>
.f-size {
    font-size: 11px;
}
header {
    height: 120px;
}
</style>