<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Movie;
class PagesController extends Controller
{
    public function home(){
        $genres = Genre::all();
        return view('pages.home')->with('genres', $genres);
    }
}
