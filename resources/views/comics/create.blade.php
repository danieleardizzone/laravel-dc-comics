@extends('layouts.app')

@section('content')

    <section>
        <div class="container">
            <form action="">
                @csrf

                <input type="text" name="title" id="title" placeholder="Titolo">
                <input type="text" name="thumb" id="thumb" placeholder="Immagine">
                <input type="text" name="price" id="price" placeholder="Prezzo">
                <input type="text" name="series" id="series" placeholder="Serie">
                <input type="text" name="type" id="type" placeholder="Tipo">
                <input type="text" name="description" id="description" placeholder="descrizione">

                <input type="submit" value="Invia">

            </form>
        </div>
    </section>
    
@endsection