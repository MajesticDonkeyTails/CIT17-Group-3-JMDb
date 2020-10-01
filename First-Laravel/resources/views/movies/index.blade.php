@extends('layouts.master')

@section('masthead')

    <h1>Movies</h1>
    <h2>Movie page, change this anytime soon</h2>

@endsection

@section('content')

    <div class = "container">
        <div class = "row">
            <div class = "col-md-12">
                <a href = "{{ url('/movies/create') }}">Add movie record</a>
                <table>
                    <h1>List of Movies</h1>
                    <thead>
                        <th>Movie ID</th>
                        <th>Title</th>
                        <th>Release Date</th>
                        <th>Plot / Synopsis</th>
                        <th>Age Rating</th>
                        <th colspan = "2">OPERATIONS</th>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movies)
                            <tr>
                                <td>{{ $movies->id }}</td>
                                <td>{{ $movies->title }}</td>
                                <td>{{ $movies->release_date }}</td>
                                <td>{{ $movies->plot }}</td>
                                <td>{{ $movies->age_rating }}</td>
                                <td><a href = "{{ url('/movies/edit', ['id' => $movies->id]) }}">EDIT</a></td>
                                <td>
                                    <form action = "{{ url('/movies/remove', ['id' => $movies->id]) }}" method = "POST">
                                        @include('layouts.errors')
                                        @csrf
                                        <button type = "submit">REMOVE</button>
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