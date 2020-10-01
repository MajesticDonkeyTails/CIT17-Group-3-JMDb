@extends('layouts.master')

@section('masthead')

@endsection

@section('content')

    <div class = "container">
        <div class = "row">
            <div class = "col-md-12">
                <h2>Old Property</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $movie->id }}</td>
                            <td>{{ $movie->title }}</td>
                        </tr>
                    </tbody>
                </table>
                <h2>New Property</h2>
                
                <form action = "{{ url('/movies/edit', ['id' => $movie->id]) }}" method = "POST">
                    @include('layouts.errors')
                    @csrf
                    Title: <input type = "text" name = "title" required placeholder = "Title">
                    <br/>
                    <br/>
                    <button type = "submit">Save changes</button>
                    <br/>
                    <a href = "{{ url('/movies') }}">SAVE NO CHANGES</a>
                </form>
            </div>
        </div>
    </div>

@endsection