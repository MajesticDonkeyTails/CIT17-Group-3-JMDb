@extends('layouts.master')

@section('content')

    <div class = "filler-gap container-fluid"></div>

    <div id = "movie-list" class = "custom container-fluid">
        <!-- Header -->
        <div class = "row">
            <div class = "col-xl-12">
                <h3>List of Movies</h3>
                <br/>
                <a class = "btn-action" href = "{{ url('/movies/create') }}">Add movie record</a>
            </div>
        </div>
        <!-- Table -->
        <div class = "row">
            <div class = "col-xl-12">
                <table class = "movie-table">
                    <thead>
                        <tr>
                            <th class = "id">ID</th>
                            <th class = "title">Title</th>
                            <th class = "genre">Genre</th>
                            <th class = "age-rating">MPAA</th>
                            <th class = "date">Release Date</th>
                            <th class = "action">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movie)
                            <tr title = "{{ $movie->plot }}">
                                <td class = "id">{{ $movie->id }}</td>
                                <td class = "title"><a href = "{{ url('/movies/view', ['id' => $movie->id]) }}">{{ $movie->title }}</a></td>
                                <td class = "genre">
                                    @foreach ($movie->genres as $genre)
                                        @if ($loop->last)
                                            {{ $genre->genre }}
                                        @else
                                            {{ $genre->genre }},
                                        @endif
                                    @endforeach
                                </td>
                                <td class = "age-rating">{{ $movie->age_rating }}</td>
                                <td class = "date">{{ $movie->release_date->format('F').' '.$movie->release_date->day.', '.$movie->release_date->year }}</td>
                                <td class = "action">
                                    <form action = "{{ url('/movies/remove', ['id' => $movie->id]) }}" method = "POST">
                                        @include('layouts.errors')
                                        @csrf
                                        <a class = "btn-action" href = "{{ url('/movies/edit', ['id' => $movie->id]) }}">EDIT</a>
                                        <button class = "btn-action" type = "submit">REMOVE</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection