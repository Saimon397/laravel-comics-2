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
        <div class="position-absolute box-delete">
            <button id="myBtn" class="btn-delete">Cancella</button>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close my-close">&times;</span>
                <h4 class="text-center mb-4">Sei sicuro di voler cancellare questo Comic?</h4>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="text-center">
                    @csrf
                    @method('DELETE')
                    <div>
                    <button type="submit" class="my-btn me-4">Si</button>
                    <span class="my-btn no" id="btn-close">No</span>
                    </div>
                </form>
                
            </div>
        </div>
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