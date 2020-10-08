<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model {
    
    //Fillable by the forms
    protected $fillable = [
        'movie_id',
        'genre',
    ];
    
}
