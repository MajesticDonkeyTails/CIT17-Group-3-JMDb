<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Eloquent

class Movie extends Model {
    
    //Fillable by the forms
    protected $fillable = [
        'title',
        'release_date',
        'runtime',
        'plot',
        'age_rating',
    ];
    
    //
    public function genres () {
        return $this->hasMany(Genre::class);
    }
}
