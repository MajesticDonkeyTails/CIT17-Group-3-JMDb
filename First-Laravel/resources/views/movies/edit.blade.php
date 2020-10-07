@extends('layouts.master')

@section('content')

    <div class = "filler-gap container-fluid"></div>

    <div id = "movie-list" class = "custom container-fluid">
        <!-- Header -->
        <div class = "row">
            <div class = "col-xl-12">
                <h6>Movie ID#{{ $movie->id }}</h6>
                <h3>{{ $movie->title }}</h3>
                <p>Rating: {{ $movie->age_rating }}</p>
                <p>{{ $movie->plot }}</p>
            </div>
        </div>
        <!-- Edit -->
        <form action = "{{ url('/movies/edit', ['id' => $movie->id]) }}" method = "POST">
            @include('layouts.errors')
            @csrf
        <div class = "row">
            <div class = "col-xl-12">
                <h3>Properties</h3>
                <p>Note: one-to-many relationship properties (genre, language, country) are not yet implemented for editing.</p>
                <br/>
                <div class = "row">
                    <div class = "col-lg-6">
                        <h6>Title:</h6>
                        <input type = "text" name = "title" required placeholder = "Title" value = "{{ $movie->title }}">
                        <br/>
                        <h6>MPAA Rating:</h6>
                        <label class = "radio-container">{{ $movie->age_rating }} (Default)
                            <input type = "radio" checked = "checked" name = "age-rating" value = "{{ $movie->age_rating }}">
                            <span class = "checkmark"></span>
                        </label>
                        <label class = "radio-container">Unrated
                            <input type = "radio" name = "age-rating" value = "Unrated">
                            <span class = "checkmark"></span>
                        </label>
                        <label class = "radio-container">G
                            <input type = "radio" name = "age-rating" value = "G">
                            <span class = "checkmark"></span>
                        </label>
                        <label class = "radio-container">PG
                            <input type = "radio" name = "age-rating" value = "PG">
                            <span class = "checkmark"></span>
                        </label>
                        <label class = "radio-container">PG-13
                            <input type = "radio" name = "age-rating" value = "PG-13">
                            <span class = "checkmark"></span>
                        </label>
                        <label class = "radio-container">R
                            <input type = "radio" name = "age-rating" value = "R">
                            <span class = "checkmark"></span>
                        </label>
                        <label class = "radio-container">NC-17
                            <input type = "radio" name = "age-rating" value = "NC-17">
                            <span class = "checkmark"></span>
                        </label>
                    </div>
                    <div class = "col-lg-6">
                        <h6>Plot / Synopsis:</h6>
                        <textarea name = "plot">{{ $movie->plot }}</textarea>
                    </div>
                </div>
            </div>
            </div>
        <!-- Actions -->
        <div class = "row">
            <div class = "col-xl-12">
                <h3>Finalization</h3>
                <p>Review changes before any action.</p>
                <a class = "btn-action" href = "{{ url('/movies') }}">Save No Changes</a>
                <button class = "btn-action" type = "submit">Save changes</button>
            </div>
        </div>
        </form>
    </div>

@endsection