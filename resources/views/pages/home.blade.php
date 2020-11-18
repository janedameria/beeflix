@extends('layouts.app')

@section('content')
    @foreach($genres as $genre)
      <div class="container">
        <div class="d-flex genre-title justify-content-between p-1">
          <h4  class="ml-3"><i class="fas fa-ticket-alt"></i> {{$genre['name']}}</h4>
        <a class="more-btn mr-2" href="/genres/{{$genre['genre_id']}}">More</a>
        </div>
        <div class="container align-self-center">
          <div class="row mb-4 justify-content-center">
            @foreach ($genre->movie->take(5) as $movie)              
            @include('inc.movies')
            @endforeach 
          </div>
        </div>
       
      </div>
    @endforeach
@endsection