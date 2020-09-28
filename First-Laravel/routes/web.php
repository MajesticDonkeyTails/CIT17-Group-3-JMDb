<?php

use App\Movie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
    Nick notes:
    - The first slash is similar to accessing the root directory (from a URL bar's perspective).
    - Route::get is when a client is asking information from the server.
    - Route::post is when a client is giving information to the server.
    - The first parameter (directory naming) for Route::<type> is case-sensitive.
    - The second parameter is a function for execution, self or invoked from elsewhere.
        - If invoked from elsewhere, specify the file name of the function's origin, followed by '@' then the function name found within the origin.
            - Example: Route::get('/', 'PagesController@index');
            - Finds 'PagesController.php' then executes index().
*/

//Roots
    Route::get('/', function () {return view('home');});

//LOGIN, SIGN UP, AND USERS
    Route::get('/login', 'AuthenticationsController@indexLogin')->name('login');
    Route::post('/login', 'AuthenticationsController@login');
    Route::middleware(['auth'])->group(function () {
        Route::get('/logout', 'AuthenticationsController@logout');
        Route::get('/dashboard', 'DashboardsController@index');
    });
    Route::get('/sign-up', 'AuthenticationsController@indexSignUp');
    Route::post('/sign-up', 'AuthenticationsController@signUp');



    Route::get('/movies', function () {
        $movies = Movie::all();
        
        return view('movies/index', compact('movies'));
    });
    Route::get('/movies/create', 'PagesController@moviesCreate');
    Route::get('/movies/{id}', 'PagesController@moviesShow');
    Route::get('/about-us', 'PagesController@aboutUs');
