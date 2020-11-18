<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    public $primaryKey = 'movie_id';
    public $foreignKey = 'genre_id';
    public $title = 'title';
    public $photo = 'photo';
    public $description = 'description';
    public $rating = 'rating';
    // use HasFactory;
    public function genre(){
        return $this->belongsTo('App\Models\Genre', 'genre_id');
    }
    public function episode(){
        return $this->hasMany('App\Models\Episode', 'movie_id');
    }

}
