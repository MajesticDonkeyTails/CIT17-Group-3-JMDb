@extends('layouts.master')

@section('content')

    <div class = "filler-gap container-fluid"></div>

    <div class = "custom container-fluid">
        <!-- Header -->
        <div class = "row">
            <div class = "col-xl-12">
                <h6>Movie ID#{{ $movie->id }}</h6>
                <h3>{{ $movie->title }}</h3>
                <p>{{ $movie->age_rating }} | {{ $movie->release_date->format('F').' '.$movie->release_date->day.', '.$movie->release_date->year }} | {{ $movie->runtime }} minutes | 
                    @foreach ($movie->genres as $genre)
                        @if ($loop->last)
                            {{ $genre->genre }}
                        @else
                            {{ $genre->genre }},
                        @endif
                    @endforeach
                </p>
                <p>{{ $movie->plot }}</p>
                <a class = "btn-action" href = "{{ url('/movies') }}">Return To Index</a>
            </div>
        </div>
    </div>

@endsection