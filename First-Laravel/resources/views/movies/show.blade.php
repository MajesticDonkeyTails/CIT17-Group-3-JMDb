@extends('layouts.master')

@section('masthead')

@endsection

@section('content')

    <div class = "container">
        <div class = "row">
            <div class = "col-md-12">
                <h1>{{ $movie->title }}</h1>
                <p>{{ $movie->plot }}</p>
                <p>Release Date: {{ $movie-> release_date }}</p>
            </div>
        </div>
    </div>

@endsection