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

//LOGIN AND USERS
    Route::get('/login', 'AuthenticationsController@index')->name('login');
    Route::post('/login', 'AuthenticationsController@login');
    Route::middleware(['auth'])->group(function () {
        Route::get('/logout', 'AuthenticationsController@logout');
        Route::get('/dashboard', 'DashboardsController@index');
    });
        

/*
Alternative declutter
Route::middleware(['auth'])->group(function () {
    
});
*/





    Route::get('/movies', function () {
        $movies = Movie::all();
        
        return view('movies/index', compact('movies'));
    });
    Route::get('/movies/create', 'PagesController@moviesCreate');
    Route::get('/movies/{id}', 'PagesController@moviesShow');
    Route::get('/about-us', 'PagesController@aboutUs');




    //Route::get('/sign-up', 'SignUpController@index'); <- Non-existent




























//Activity 1: September 10, 2020
    Route::get('/activities/route/1', function () {return view('activity-1-routes/route-1');});
    Route::get('/activities/route/2', 'ActivitiesController@route2');
    Route::get('/activities/route/3', 'ActivitiesController@route3');
    Route::get('/activities/route/4', 'ActivitiesController@route4');
    Route::get('/activities/route/5', 'ActivitiesController@route5');
    Route::get('/activities/route/6', 'ActivitiesController@route6');

//Intermission: September 11, 2020
    Route::get('/activities/quotes/{author}', 'ActivitiesController@filterByAuthor');
    Route::get('/activities/products', 'ActivitiesController@products');

//Activity 2: September 13, 2020
    Route::get('/activities/database-querying', 'ActivitiesController@averages');