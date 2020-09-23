@extends('layouts.master')

@section('masthead')

    <h1 class = "mx-auto my-0 text-uppercase">Movies</h1>
    <h2 class = "text-white-50 mx-auto mt-2 mb-5">Movie page, change this anytime soon</h2>

@endsection

@section('content')

    <div class = "container">
        <div class = "row">
            <div class = "col-md-12">
                <h1>Movie Page</h1>
                <p>This page is W.I.P. Design is not final.</p>
            </div>
            <div class = "col-md-12">
                <a href = "/movies/create">Add movie record</a>
                <table>
                    <h1>List of Movies</h1>
                    <thead>
                        <th>Movie ID</th>
                        <th>Title</th>
                        <th>Release Date</th>
                        <th>Plot / Synopsis</th>
                        <th>Age Rating</th>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movies)
                            <tr>
                                <td>{{ $movies->id }}</td>
                                <td><a href = "/movies/{{ $movies->id }}">{{ $movies->title }}</a></td>
                                <td>{{ $movies->release_date }}</td>
                                <td>{{ $movies->plot }}</td>
                                <td>{{ $movies->age_rating }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection