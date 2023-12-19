@extends('layouts.app')

@section('content')
   
   <section>
      <div class="container">
         <h1>DC comics</h1>
         <a href="{{ route('comics.create') }}">Nuovo fumetto</a>
         <table class="table">
            <thead>
               <tr>
                  <th scope="col">id</th>
                  <th scope="col">Titolo</th>
                  <th scope="col">Thumb</th>
                  <th scope="col">Prezzo</th>
                  <th scope="col">Descrizione</th>
               </tr>
            </thead>
            <tbody>

               @forelse ($comics as $comic)

                  <tr>
                     <td scope="row">{{ $comic->id }}</td>
                     <td><a href="{{ route('comics.show', $comic) }}">{{ $comic->title }}</a></td>
                     <td><img src="{{ $comic->thumb }}" height="300px" alt=""></td>
                     <td>{{ $comic->price }}</td>
                     <td>{{ $comic->description }}</td>
                  </tr>

               @empty

                  <tr>
                     <td colspan="6">
                        Nessuna pasta trovata
                     </td>
                  </tr>

               @endforelse
            </tbody>
         </table>
      </div>
   </section>

@endsection