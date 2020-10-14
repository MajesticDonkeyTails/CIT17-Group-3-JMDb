@extends('layouts.master')

@section('content')

    <div class = "filler-gap container-fluid"></div>

    <div class = "custom container-fluid">
        <!-- Header -->
        <div class = "row">
            <div class = "col-xl-12">
                <h3>About</h3>
                <h6>And some notes</h6>
                <br/>
                <p>
                    This website is for educational purposes only, built with the Laravel PHP framework (<a href = "https://laravel.com/">Laravel site</a>).
                    It is merely a concept for an internet movie database.
                    Please note some of the features on this website may not function as intended, as most of it is experimental or bugged.
                    Website made by Mark Joseph.
                </p>
            </div>
        </div>
        <!-- Notes -->
        <div class = "row">
            <div class = "col-xl-12">
                <h3>Notes</h3>
                <h6>And a few bugs here and there</h6>
                <br/>
                <ul>
                    Navigation:
                    <li>The dropdown links for label "Movies" lead to the same page without any filters.</li>
                </ul>
                <ul>
                    Log in and sign up:
                    <li>Functional, but going to any other page does not represent the user logged in.</li>
                </ul>
                <ul>
                    Home:
                    <li>Contains dummy links.</li>
                </ul>
                <ul>
                    Movies:
                    <li>Any user (registered or anonymous) has full control and access to making, editing and deleting records.</li>
                    <li>No warning prompts implemented when deleting a record.</li>
                    <li>No strict 'number only' input implemented for a few certain inputs.</li>
                    <li>Dates (not nullable) with a set day beyond its month's total day count causes invalid date format errors.</li>
                </ul>
            </div>
        </div>
    </div>

@endsection