@extends('layout.app')

@section('page-title', 'Laravel Comics')

@section('content')

<div>
    <div class="blue"></div>
    <div class="container">
        <div class="box-single-img">
            <span class="comic">comic book</span>
            <img src="{{$comic->thumb}}" alt="" class="img-single">
            <span class="view text-center">view gallery</span>
        </div>
        <div class="position-absolute box-mod">
            <a href="{{route('comics.edit', $comic->id)}}" class="mod">Modifica</a>
        </div>
        <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="position-absolute box-delete">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-delete">Cancella</button>
        </form>
    </div>
</div>

<div class="container mt-5">
    <h1 class="text-uppercase mb-4">{{ $comic->title }}</h1>
        <div class="d-flex">
            <div class="col-8">
                <div class="container-available d-flex">
                    <p class="available-price"> U.S. Price: <span class="price">{{ $comic->price }}</span></p>
                    <div class="status">
                        <p class="text-uppercase available me-4">avaible</p>
                        <span class="check ms-2">Check Availability</span>
                    </div>
                </div>
                <div class="mt-3">
                    <p class="description">{{ $comic->description }}</p>
                </div>
            </div>
            <div class="ms-5 adv">
                <span class="d-flex justify-content-end text-uppercase fw-bold">advertisement</span>
                <img src="{{ Vite::asset('/resources/img/adv.jpg') }}" alt="">
            </div>
        </div>
    </div>
@endsection