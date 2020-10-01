<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller {
    
    //INDICES
    public function index () {
        $movies = Movie::all();
        
        return view('movies.index', compact('movies'));
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
            'title' => 'required'
        ]);
        //Add user to database
        $movie = Movie::create($validated_fields);
        //Redirect
        return redirect('/movies');
    }
    
    //EDIT: (pending user accessibility)
    public function edit($id) {
        //Validate
        $validated_fields = request()->validate([
            'title' => 'required'
        ]);
        //Update
        $update = Movie::where('id', $id)->update($validated_fields);
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
