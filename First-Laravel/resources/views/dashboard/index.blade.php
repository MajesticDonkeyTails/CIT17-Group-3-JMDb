@extends('/layouts/master')

@section('masthead')

    <h1>Dashboard</h1>
    <h2>This header is temporary</h2>

@endsection

@section('content')

    <h2>Hello {{ auth()->user()->username }}.</h2>
    <a href = "/logout">Logout</a>
    
@endsection