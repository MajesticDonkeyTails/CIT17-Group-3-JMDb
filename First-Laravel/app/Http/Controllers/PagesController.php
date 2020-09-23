<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

/*
    Nick notes:
    - This is a controller created to help declutter the web.php file located in "First-Laravel/routes/".
    - All created php and html files for display are located in "First-Laravel/resources/views/".
        - CSS design and JS programming galore!
    
    - Naming convention: views
        > <lowercase words> + "blade.php"
        > hello-world.blade.php
        > about-us.blade.php
*/

class PagesController extends Controller {
    
    //Primary root directories
    public function home () {return view('home');}
    public function movies () {
        $movies = Movie::all();
        
        return view('movies/index', compact('movies'));
    }
    public function aboutUs () {return view('about-us');}
    
    //Movies
    public function moviesCreate() {
        return view('movies/create');
    }
    public function moviesShow($id) {
        $movie = Movie::findOrFail($id);
        return view('movies/show', compact('movie'));
    }
    
    //Unused laravel directories
    public function index () {return view('welcome');}
    
}
