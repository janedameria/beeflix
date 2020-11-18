@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="btn-container">
      <a href="{{ url()->previous() }}" class="back-btn"><i class="far fa-arrow-alt-circle-left fa-2x"></i></a>
    <a class="all-btn" href="/">All Movies</a>
    </div>

   <div class="container mt-3">
    <div class="in-container row">
      <div class="in-photo col-12 col-lg-4 text-center">
        
         <img src="{{$movie['photo']}}" style="max-width: 260px" >
      </div>
     <div class="in-desc col-12 col-lg-8 ">
       <h2 class="text-center mt-2 mb-3 movie-title">{{$movie['title']}}</h2>
       <p class="text-justify">{{$movie['description']}}</p>
       <p class=""><strong>Rating : </strong>
         @for ($i = 0; $i < 5; $i++)
             @if ($i < $movie['rating'])
               <i class="fa fa-star" style="font-size:1.3em;color:#FFD505"></i>
             @endif
         @endfor
       
       </p>
       <p><strong>Category :</strong> <span class="genre">{{$movie->genre['name']}}</span></p>
     </div>
    </div>
    <div class="container mt-5 eps-container">
     
    <h3 class="text-center p-2 eps-title">Episodes</h3>
      @if (count($episodes) > 0)
       <ul class="list-group">
         @foreach ($episodes as $episode)
           <li class="list-group-item">Episode {{$episode['episode']}} : {{$episode['title']}}</li>
         @endforeach
        
       </ul>
       <div class="d-flex justify-content-center mt-2">
         {{$episodes->links('pagination::bootstrap-4')}}
       </div>
      @endif
      
     </div>
   </div>
  </div>

@endsection