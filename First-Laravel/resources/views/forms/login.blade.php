@extends('layouts.master')

@section('masthead')

    <h1>Login</h1>
    <h2>This header is temporary</h2>

@endsection

@section('content')

    <form action = "/login" method = "POST">
        @include('layouts.errors')
        @csrf
        <input type = "text" name = "email" required placeholder = "Email Address">
        <input type = "password" name = "password" required placeholder = "Password">
        <button type = "submit">Submit</button>
    </form>

@endsection