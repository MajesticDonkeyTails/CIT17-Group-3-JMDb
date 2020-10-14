@extends('layouts.master')

@section('content')

    <div class = "filler-gap container-fluid"></div>

    <div class = "custom container-fluid">
        <form action = "{{ url('/movies/create') }}" method = "POST">
            @include('layouts.errors')
            @csrf
            <!-- Header -->
            <div class = "row">
                <div class = "col-xl-12">
                    <h3>Add Movie Record</h3>
                    <br/>
                    <a class = "btn-action" href = "{{ url('/movies') }}">Return To Movie Tables</a>
                </div>
            </div>
            <!-- Edit -->
            <div class = "row">
                <div class = "col-xl-12">
                    <h3>Properties</h3>
                    <br/>
                    <div class = "row">
                        <div class = "col-xl-6">
                            <h6>Title:</h6>
                            <input type = "text" name = "title" required placeholder = "Title"/>
                            <br/>
                            <h6>Runtime:</h6>
                            <input type = "text" name = "runtime" required placeholder = "Runtime"/>
                            <br/>
                            <h6>Release Date:</h6>
                            <div style = "display: flex;">
                                <input type = "text" name = "date-year" required placeholder = "Year"/>
                                <select name = "date-month">
                                    @for ($i = 0, $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']; $i < 12; $i++)
                                        <option value = "{{ $i + 1 }}">{{ $months[$i] }}</option>
                                    @endfor
                                </select>
                                <select name = "date-day">
                                    @for ($i = 1; $i <= 31; $i++)
                                        <option value = "{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <br/>
                            <h6>MPAA Rating:</h6>
                            @for ($i = 0, $mpaa = ['Unrated', 'G', 'PG', 'PG-13', 'R', 'NC-17']; $i < 6; $i++)
                                <label class = "radio-container">{{ $mpaa[$i] }}
                                    <input type = "radio" name = "age-rating" value = "{{ $mpaa[$i] }}"/>
                                    <span class = "checkmark"></span>
                                </label>
                            @endfor
                        </div>
                        <div class = "col-xl-6">
                            <h6>Plot / Synopsis:</h6>
                            <textarea name = "plot"></textarea>
                            <br/>
                            <h6>Genres:</h6>
                            <br/>
                            @foreach ($genresUnchecked as $genre)
                                <input type = "checkbox" name = "genre[]" value = "{{ $genre }}"/><label for = "genre">{{ $genre }}</label><br/>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Actions -->
            <div class = "row">
                <div class = "col-xl-12">
                    <h3>Finalization</h3>
                    <p>Review inputs before any action.</p>
                    <button class = "btn-action" type = "submit">Add Movie</button>
                </div>
            </div>
        </form>
    </div>

@endsection