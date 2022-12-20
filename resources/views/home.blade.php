@extends('layout.app')

@section('page-title', 'Laravel Comics')

@section('content')
    <section class="container home text-center mt-5">
        <img class="logo-home" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
        <a class="my-a ms-5" href="{{route('comics.create')}}">Carica il tuo Comic...</a>
    </section>
@endsection

<style>
@use '../scss/variables' as *;

.logo-home{
width: 20%
}

.my-a {
    font-size: 2rem;
    text-decoration: none;
    color: black;
}

.my-a:hover{
    color: blue
}
</style>
