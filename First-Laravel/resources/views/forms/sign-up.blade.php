@extends('layouts.master')

@section('content')

    <div class = "filler-gap container-fluid"></div>

    <div class = "custom container-fluid">
        <!-- Header -->
        <div class = "row">
            <div class = "col-xl-12">
                <h3>Sign Up</h3>
            </div>
        </div>
        <div class = "row">
            <div class = "col-xl-4">
                <form action = "/sign-up" method = "POST">
                    @include('layouts.errors')
                    @csrf
                    <input type = "text" name = "username" required placeholder = "Username">
                    <br/>
                    <input type = "text" name = "email" required placeholder = "Email Address">
                    <br/>
                    <input type = "password" name = "password" required placeholder = "Password">
                    <br/>
                    <button class = "btn-action" type = "submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection