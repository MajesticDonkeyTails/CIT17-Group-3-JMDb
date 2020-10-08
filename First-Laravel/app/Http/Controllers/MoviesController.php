<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller {
    
    //INDICES
    public function index () {
        $movies = Movie::all();
        $genres = Genre::all();
        
        return view('movies.index', compact('movies', 'genres'));
    }
    public function indexCreate () {return view('movies.create');}
    public function indexEdit ($id) {
        //Selected movie
        $movie = Movie::findOrFail($id);
        //Return view
        return view('movies.edit', compact('movie'));
    }
    
    //CREATE: (pending user accessibility)
    public function create() {
        //Validate
        $validated_fields = request()->validate([
            'title' => 'required',
            'date-year' => 'required',
            'date-month' => 'required',
            'date-day' => 'required',
            'runtime' => 'required',
            'age-rating' => 'required',
            'plot' => 'required'
        ]);
        //Add user to database
        $movie = Movie::create([
            'title' => $validated_fields['title'],
            'release_date' => $validated_fields['date-year'].'-'.$validated_fields['date-month'].'-'.$validated_fields['date-day'],
            'runtime' => $validated_fields['runtime'],
            'age_rating' => $validated_fields['age-rating'],
            'plot' => $validated_fields['plot']
        ]);
        //Redirect
        return redirect('/movies');
    }
    
    //EDIT: (pending user accessibility)
    public function edit($id) {
        //Validate
        $validated_fields = request()->validate([
            'title' => 'required',
            'date-year' => 'required',
            'date-month' => 'required',
            'date-day' => 'required',
            'runtime' => 'required',
            'age-rating' => 'required',
            'plot' => 'required'
        ]);
        //Update
        $update = Movie::where('id', $id)->update([
            'title' => $validated_fields['title'],
            'release_date' => $validated_fields['date-year'].'-'.$validated_fields['date-month'].'-'.$validated_fields['date-day'],
            'runtime' => $validated_fields['runtime'],
            'age_rating' => $validated_fields['age-rating'],
            'plot' => $validated_fields['plot']
        ]);
        //Redirect
        return redirect('/movies');
    }
    
    //REMOVE: (pending user accessibility, also add prompt for removal)
    public function remove($id) {
        //Delete
        $delete = Movie::where('id', $id)->delete();
        //Redirect
        return redirect('/movies');
    }
    
}
