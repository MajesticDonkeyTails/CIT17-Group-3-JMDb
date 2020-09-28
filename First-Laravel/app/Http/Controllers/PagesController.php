<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PagesController extends Controller {
    
    
    public function dashboard_index () {
        return view('dashboard');
    }
    
    
    //
    public function movies () {}
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