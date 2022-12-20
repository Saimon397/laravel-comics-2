@extends('layout.app')

@section('page-title', 'Laravel Comics')

@section('content')
<div class="bg-create">
    <section class="container home text-center mt-5">
        <img class="logo-home" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
        <a class="my-a ms-5 text-uppercase fw-bold" href="{{route('comics.create')}}">Carica il tuo Comic</a>
    </section>
</div>
@endsection

<style>
@use '../scss/variables' as *;

.logo-home{
width: 20%
}

.my-a {
    background-color: rgba(2, 130, 249);
        text-transform: uppercase;
        color: white;
        font-weight: bold;
        font-size: 25px;
        text-decoration: none;
        border: 3px solid black;
        border-radius: 10px;
        padding: 20px 20px;
}

.my-a:hover{
    color: white;
    background-color: rgb(0, 82, 158);
}
</style>
