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
                    <ul>
                        Notes:
                        <li>One-to-many relationship properties (genre, language, country) are not yet implemented for editing.</li>
                        <li>Strict "number only" input is not yet implemented for runtime and year of release.</li>
                    </ul>
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
                                    <option value = "{{ $movie->release_date->month }}">{{ $movie->release_date->format('F') }} (Default)</option>
                                    <option value = "01">January</option>
                                    <option value = "02">February</option>
                                    <option value = "03">March</option>
                                    <option value = "04">April</option>
                                    <option value = "05">May</option>
                                    <option value = "06">June</option>
                                    <option value = "07">July</option>
                                    <option value = "08">August</option>
                                    <option value = "09">September</option>
                                    <option value = "10">October</option>
                                    <option value = "11">November</option>
                                    <option value = "12">December</option>
                                </select>
                                <select name = "date-day">
                                    <option value = "{{ $movie->release_date->day }}">{{ $movie->release_date->day }} (Default)</option>
                                    <option value = "01">1</option>
                                    <option value = "02">2</option>
                                    <option value = "03">3</option>
                                    <option value = "04">4</option>
                                    <option value = "05">5</option>
                                    <option value = "06">6</option>
                                    <option value = "07">7</option>
                                    <option value = "08">8</option>
                                    <option value = "00">9</option>
                                    <option value = "10">10</option>
                                    <option value = "11">11</option>
                                    <option value = "12">12</option>
                                    <option value = "13">13</option>
                                    <option value = "14">14</option>
                                    <option value = "15">15</option>
                                    <option value = "16">16</option>
                                    <option value = "17">17</option>
                                    <option value = "18">18</option>
                                    <option value = "19">19</option>
                                    <option value = "20">20</option>
                                    <option value = "21">21</option>
                                    <option value = "22">22</option>
                                    <option value = "23">23</option>
                                    <option value = "24">24</option>
                                    <option value = "25">25</option>
                                    <option value = "26">26</option>
                                    <option value = "27">27</option>
                                    <option value = "28">28</option>
                                    <option value = "29">29</option>
                                    <option value = "30">30</option>
                                    <option value = "31">31</option>
                                </select>
                            </div>
                            <br/>
                            <h6>MPAA Rating:</h6>
                            <label class = "radio-container">{{ $movie->age_rating }} (Default)
                                <input type = "radio" checked = "checked" name = "age-rating" value = "{{ $movie->age_rating }}"/>
                                <span class = "checkmark"></span>
                            </label>
                            <label class = "radio-container">Unrated
                                <input type = "radio" name = "age-rating" value = "Unrated"/>
                                <span class = "checkmark"></span>
                            </label>
                            <label class = "radio-container">G
                                <input type = "radio" name = "age-rating" value = "G"/>
                                <span class = "checkmark"></span>
                            </label>
                            <label class = "radio-container">PG
                                <input type = "radio" name = "age-rating" value = "PG"/>
                                <span class = "checkmark"></span>
                            </label>
                            <label class = "radio-container">PG-13
                                <input type = "radio" name = "age-rating" value = "PG-13"/>
                                <span class = "checkmark"></span>
                            </label>
                            <label class = "radio-container">R
                                <input type = "radio" name = "age-rating" value = "R"/>
                                <span class = "checkmark"></span>
                            </label>
                            <label class = "radio-container">NC-17
                                <input type = "radio" name = "age-rating" value = "NC-17"/>
                                <span class = "checkmark"></span>
                            </label>
                        </div>
                        <div class = "col-xl-6">
                            <h6>Plot / Synopsis:</h6>
                            <textarea name = "plot">{{ $movie->plot }}</textarea>
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