@extends('layouts.master')

@section('masthead')

    <h1 class = "mx-auto my-0 text-uppercase">Movies</h1>
    <h2 class = "text-white-50 mx-auto mt-2 mb-5">Movie page, change this anytime soon</h2>

@endsection

@section('content')

    <div class = "container">
        <div class = "row">
            <div class = "col-md-12">
                <h1>Create Movie</h1>
                <form action = "">
                    <label for = "title">Title</label>
                    <input placeholder = "Title" type = "text" name = "title"/>
                    <br/>
                    <label for = "title">Plot</label>
                    <textarea placeholder = "Plot" name = "plot"></textarea>
                    <button type = "submit" name = "action">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection