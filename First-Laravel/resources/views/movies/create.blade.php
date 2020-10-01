@extends('layouts.master')

@section('masthead')

    <h1>Add Movie Record</h1>

@endsection

@section('content')

    <form action = "{{ url('/movies/create') }}" method = "POST">
        @include('layouts.errors')
        @csrf
        <input type = "text" name = "title" required placeholder = "Title">
        <button type = "submit">Submit</button>
    </form>

@endsection