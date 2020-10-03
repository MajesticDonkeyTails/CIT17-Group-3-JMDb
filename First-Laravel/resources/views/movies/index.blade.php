@extends('layouts.master')

@section('content')

    <div class = "container-fluid">
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
    </div>

    <div class = "container-fluid">
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
                        <th>Genres</th>
                        <th colspan = "2">OPERATIONS</th>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movie)
                            <tr>
                                <td>{{ $movie->id }}</td>
                                <td>{{ $movie->title }}</td>
                                <td>{{ $movie->release_date }}</td>
                                <td>{{ $movie->plot }}</td>
                                <td>{{ $movie->age_rating }}</td>
                                <td>
                                    @foreach ($movie->genres as $genre)
                                        {{ $genre->genre }}
                                    @endforeach
                                </td>
                                <td><a href = "{{ url('/movies/edit', ['id' => $movie->id]) }}">EDIT</a></td>
                                <td>
                                    <form action = "{{ url('/movies/remove', ['id' => $movie->id]) }}" method = "POST">
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
<script>
/*

                                    @foreach ($genres as $genre)
                                        @if ($movie->id == $genre->movie_id)
                                            {{ $genre->genre }}
                                        @endif
                                    @endforeach
*/
</script>

@endsection