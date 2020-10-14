@extends('layouts.master')

@section('content')

    <div class = "filler-gap container-fluid"></div>

    <div class = "custom container-fluid">
        <!-- Header -->
        <div class = "row">
            <div class = "col-xl-12">
                <h3>Log In</h3>
            </div>
        </div>
        <div class = "row">
            <div class = "col-xl-4">
                <form action = "{{ url('/login') }}" method = "POST">
                    @include('layouts.errors')
                    @csrf
                    <input type = "text" name = "email" required placeholder = "Email Address">
                    <br/>
                    <input type = "password" name = "password" required placeholder = "Password">
                    <br/>
                    <button class = "btn-action" type = "submit">Log In</button>
                    <br/>
                    <br/>
                    <p>New? Sign up <a href = "{{ url('/sign-up') }}">here</a>.</p>
                </form>
            </div>
        </div>
    </div>

@endsection