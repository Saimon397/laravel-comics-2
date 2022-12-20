@extends('layout.app')

@section('page-title', 'Laravel Comics')

@section('content')
<div class="bg-create">
    <section class="container-fluid my-5 d-flex justify-content-center">
        <form class="bg-create2" action="{{ route('comics.store') }}" method="POST">
        @csrf
            <div class="spazio">
                <label class="my-text" for="title">Titolo..</label>
                <input class="inputz" type="text" name="title" id="title">
            </div>

            <div class="spazio">
                <label class="my-text" for="description">Descrizione..</label>
                <input class="inputz" type="text" name="description" id="description">
            </div>

            <div class="spazio">
                <label class="my-text" for="thumb">Thumb..</label>
                <input class="inputz" type="text" name="thumb" id="thumb">
            </div>

            <div class="spazio">
                <label class="my-text" for="price">Prezzo..</label>
                <input class="inputz" type="text" name="price" id="price">
            </div>

            <div class="spazio">
                <label class="my-text" for="series">Serie..</label>
                <input class="inputz" type="text" name="series" id="series">
            </div>

            <div class="spazio">
                <label class="my-text" for="sale_date">Data di uscita..</label>
                <input class="inputz" type="text" name="sale_date" id="sale_date">
            </div>

            <div class="spazio">
                <label class="my-text" for="type">Tipo..</label>
                <input class="inputz" type="text" name="type" id="type">
            </div>

            <div class="spazio">
                <label class="my-text" for="artists">Artista..</label>
                <input class="inputz" type="text" name="artists" id="artists">
            </div>

            <div class="spazio">
                <label class="my-text" for="writers">Scrittore..</label>
                <input class="inputz" type="text" name="writers" id="writers">
            </div>

            <div class="spazio">
                <input class="inputz buttone" type="submit" value="Invia">
            </div>
        </form>
    </section>
</div>
@endsection

<style>
.spazio {
    margin-bottom: 30px
}

.inputz {
    width: 100%;
    display: flex;
    justify-content: center;
    border-radius: 10px
}

.my-text {
    font-size: 1.5rem;
    font-weight: bold;
    color: rgba(2, 130, 249);
}

.buttone {
    padding: 10px 10px;
        background-color: rgba(2, 130, 249);
        text-transform: uppercase;
        color: white;
        font-weight: bold;
        font-size: 25px;
}

.buttone:hover {
    background-color: rgb(0, 82, 158);
}

</style>