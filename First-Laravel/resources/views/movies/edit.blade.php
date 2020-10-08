@extends('layouts.master')

@section('content')

    <div class = "filler-gap container-fluid"></div>

    <div class = "custom container-fluid">
        <form action = "{{ url('/movies/edit', ['id' => $movie->id]) }}" method = "POST">
            @include('layouts.errors')
            @csrf
            <!-- Header -->
            <div class = "row">
                <div class = "col-xl-12">
                    <h6>Movie ID#{{ $movie->id }}</h6>
                    <h3>{{ $movie->title }}</h3>
                    <p>{{ $movie->age_rating }} | {{ $movie->release_date->format('F').' '.$movie->release_date->day.', '.$movie->release_date->year }} | {{ $movie->runtime }} minutes</p>
                    <p>{{ $movie->plot }}</p>
                    <a class = "btn-action" href = "{{ url('/movies') }}">Save No Changes</a>
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
                            <input type = "text" name = "title" required placeholder = "Title" value = "{{ $movie->title }}"/>
                            <br/>
                            <h6>Runtime:</h6>
                            <input type = "text" name = "runtime" required placeholder = "Runtime" value = "{{ $movie->runtime }}"/>
                            <br/>
                            <h6>Release Date:</h6>
                            <div style = "display: flex;">
                                <input type = "text" name = "date-year" required placeholder = "Year" value = "{{ $movie->release_date->year }}"/>
                                <select name = "date-month">
                                    <option value = "{{ $movie->release_date->month }}">{{ $movie->release_date->format('F') }} (Current)</option>
                                    @for ($i = 0, $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']; $i < 12; $i++)
                                        @if ($movie->release_date->month != $i + 1)
                                            <option value = "{{ $i + 1 }}">{{ $months[$i] }}</option>
                                        @endif
                                    @endfor
                                </select>
                                <select name = "date-day">
                                    <option value = "{{ $movie->release_date->day }}">{{ $movie->release_date->day }} (Current)</option>
                                    @for ($i = 1; $i <= 31; $i++)
                                        @if ($movie->release_date->day != $i)
                                            <option value = "{{ $i }}">{{ $i }}</option>
                                        @endif
                                    @endfor
                                </select>
                            </div>
                            <br/>
                            <h6>MPAA Rating:</h6>
                            @for ($i = 0, $mpaa = ['Unrated', 'G', 'PG', 'PG-13', 'R', 'NC-17']; $i < 6; $i++)
                                @if ($movie->age_rating != $mpaa[$i])
                                    <label class = "radio-container">{{ $mpaa[$i] }}
                                        <input type = "radio" name = "age-rating" value = "{{ $mpaa[$i] }}"/>
                                        <span class = "checkmark"></span>
                                    </label>
                                @else
                                    <label class = "radio-container">{{ $movie->age_rating }} (Current)
                                        <input type = "radio" checked = "checked" name = "age-rating" value = "{{ $movie->age_rating }}"/>
                                        <span class = "checkmark"></span>
                                    </label>
                                @endif
                            @endfor
                        </div>
                        <div class = "col-xl-6">
                            <h6>Plot / Synopsis:</h6>
                            <textarea name = "plot">{{ $movie->plot }}</textarea>
                            <br/>
                            <h6>Genres:</h6>
                            <br/>
                            @foreach ($genresChecked as $genre)
                                <input type = "checkbox" name = "genre[]" value = "{{ $genre }}" checked/><label for = "genre">{{ $genre }} (Current)</label><br/>
                            @endforeach
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
                    <p>Review changes before any action.</p>
                    <a class = "btn-action" href = "{{ url('/movies') }}">Save No Changes</a>
                    <button class = "btn-action" type = "submit">Save changes</button>
                </div>
            </div>
        </form>
    </div>

@endsection