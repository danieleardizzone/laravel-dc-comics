@extends('layouts.app')

@section('content')

    <section>
        <div class="container">
            <h1>{{ $comic->title }}</h1>
            <div class="row">
                <div class="col">
                    <img src="{{ $comic->thumb }}" width="500" alt="">
                </div>
                <div class="col">
                    <h3>{{ $comic->series }}</h3>
                    <p>{{ $comic->description }}</p>
                    <h3>$ {{ $comic->price }}</h3>
                </div>
            </div>
        </div>
    </section>

@endsection