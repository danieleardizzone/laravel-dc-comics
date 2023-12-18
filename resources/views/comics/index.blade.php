@extends('layouts.app')

@section('content')

   @dd($comics)
   
   <section>
      <div class="container">
         <h1>DC comics</h1>
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

               @foreach ($comics as $comic)

               <tr>
                  <td scope="row">{{ $comic->id }}</td>
                  <td>{{ $comic->title }}</td>
                  <td><img src="{{ $comic->thumb }}" alt=""></td>
                  <td>{{ '$'.$comic->price }}</td>
                  <td>{{ $comic->description }}</td>
               </tr>
                   
               @endforeach
            </tbody>
         </table>
      </div>
   </section>

@endsection