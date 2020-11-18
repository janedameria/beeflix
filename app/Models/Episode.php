<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    // use HasFactory;
    protected $table = 'episodes';
    public $primaryKey = 'episode_id';
    protected $foreignKey = 'movie_id';
    protected $episode = 'epsiode';
    protected $title = 'title';

    public function movie(){
        return $this->belongsTo('App\Models\Movie', 'movie_id');
    }
}
