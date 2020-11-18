@extends('layouts.app')

@section('content')
      
      <div class="container">
        <div class="btn-container">
          <a href="{{ url()->previous() }}" class="back-btn"><i class="far fa-arrow-alt-circle-left fa-2x"></i></a>
        <a class="all-btn" href="/">All Movies</a>
        </div>
        <div class="mt-3 d-flex genre-title justify-content-between p-1">
          <h3 class="ml-2">{{$genre['name']}}</h3>
        </div>
        <div class="container">
          <div class="row mb-4">
            @foreach ($genre->movie as $movie)
              @include('inc.movies')
            @endforeach
          </div>
        </div>
       
      </div>
@endsection