<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller {
    
    //VARIABLES
    public function genreList () {
        return array('Action', 'Adventure', 'Animation', 'Comedy', 'Drama', 'Family', 'Fantasy', 'Historical', 'Horror', 'Mystery', 'Sci-fi', 'Thriller', 'Western');
    }
    
    //INDICES
    public function index () {
        $movies = Movie::all();
        $genres = Genre::all();
        
        return view('movies.index', compact('movies', 'genres'));
    }
    public function indexCreate () {
        //Genre list
        $genresUnchecked = $this->genreList();
        //Return view
        return view('movies.create', compact('genresUnchecked'));
    }
    public function indexEdit ($id) {
        //Selected movie and its genres
        $movie = Movie::findOrFail($id);
        //Filter checked genres
        $genresChecked = array ();
        foreach(Genre::where('movie_id', '=', $id)->get('genre') as $genre) {
            array_push($genresChecked, $genre->genre);
        }
        //Filter unchecked genres
        $genresUnchecked = array_diff($this->genreList(), $genresChecked);
        //Return view
        return view('movies.edit', compact('movie', 'genres', 'genresChecked', 'genresUnchecked'));
    }
    
    //CREATE
    public function create() {
        //Validate
        $validated_fields = request()->validate([
            'title' => 'required',
            'date-year' => 'required',
            'date-month' => 'required',
            'date-day' => 'required',
            'runtime' => 'required',
            'age-rating' => 'required',
            'plot' => 'required',
            'genre' => 'nullable'
        ]);
        //Add user to database
        $movie = Movie::create([
            'title' => $validated_fields['title'],
            'release_date' => $validated_fields['date-year'].'-'.$validated_fields['date-month'].'-'.$validated_fields['date-day'],
            'runtime' => $validated_fields['runtime'],
            'age_rating' => $validated_fields['age-rating'],
            'plot' => $validated_fields['plot']
        ]);
        //Record new checked genres
        foreach ($validated_fields['genre'] as $record) {
            Genre::create(['movie_id' => $movie->id, 'genre' => $record]);
        }
        //Redirect
        return redirect('/movies');
    }
    
    //EDIT
    public function edit($id) {
        //Validate
        $validated_fields = request()->validate([
            'title' => 'required',
            'date-year' => 'required',
            'date-month' => 'required',
            'date-day' => 'required',
            'runtime' => 'required',
            'age-rating' => 'required',
            'plot' => 'required',
            'genre' => 'nullable'
        ]);
        //Update movies table
        $update = Movie::where('id', $id)->update([
            'title' => $validated_fields['title'],
            'release_date' => $validated_fields['date-year'].'-'.$validated_fields['date-month'].'-'.$validated_fields['date-day'],
            'runtime' => $validated_fields['runtime'],
            'age_rating' => $validated_fields['age-rating'],
            'plot' => $validated_fields['plot']
        ]);
        //Filter movie genres
        $genresChecked = array ();
        foreach(Genre::where('movie_id', '=', $id)->get('genre') as $genre) {array_push($genresChecked, $genre->genre);}
        //Update genres table
            //If every genre is unchecked to delete all genre records for the movie
            if (!isset($validated_fields['genre'])) {Genre::where('movie_id', '=', $id)->delete();}
            //Else
            else {
                //Gather all checked (while existing) genres
                $exists = array ();
                foreach ($validated_fields['genre'] as $exist) {
                    if (Genre::where('movie_id', '=', $id)->where('genre', '=', $exist)->exists()) {
                        array_push($exists, $exist);
                    }
                }
                //Delete unchecked (while existing) genres
                $toDelete = array_diff ($genresChecked, $exists);
                foreach ($toDelete as $delete) {
                    Genre::where('movie_id', '=', $id)->where('genre', '=', $delete)->delete();
                }
                //Record new checked genres
                $toRecord = array_diff ($validated_fields['genre'], $exists);
                foreach ($toRecord as $record) {
                    Genre::create(['movie_id' => $id, 'genre' => $record]);
                }
            }
        //Redirect
        return redirect('/movies');
    }
    
    //REMOVE
    public function remove($id) {
        //Delete
        $delete = Movie::where('id', $id)->delete();
        //Redirect
        return redirect('/movies');
    }
    
    //VIEW (shares with "edit" code)
    public function view ($id) {
        //Selected movie and its genres
        $movie = Movie::findOrFail($id);
        //Filter checked genres
        $genresChecked = array ();
        foreach(Genre::where('movie_id', '=', $id)->get('genre') as $genre) {
            array_push($genresChecked, $genre->genre);
        }
        //Filter unchecked genres
        $genresUnchecked = array_diff($this->genreList(), $genresChecked);
        //Return view
        return view('movies.view', compact('movie', 'genres', 'genresChecked', 'genresUnchecked'));
    }
}
