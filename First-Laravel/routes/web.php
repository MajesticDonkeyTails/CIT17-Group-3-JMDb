<?php

use App\Movie;
use App\User;
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

//Roots
    Route::get('/', function () {return view('home');});
    Route::get('/about-us', function () {return view('about-us');});

//MOVIES
    Route::get('/movies', 'MoviesController@index');
    Route::get('/movies/create', 'MoviesController@indexCreate');
    Route::post('/movies/create', 'MoviesController@create');
    Route::get('/movies/edit/{id}', 'MoviesController@indexEdit');
    Route::post('/movies/edit/{id}', 'MoviesController@edit');
    Route::post('/movies/remove/{id}', 'MoviesController@remove');
    Route::get('/movies/view/{id}', 'MoviesController@view');

//LOGIN, SIGN UP, AND USERS
    Route::get('/login', 'AuthenticationsController@indexLogin')->name('login');
    Route::post('/login', 'AuthenticationsController@login');
    Route::middleware(['auth'])->group(function () {
        Route::get('/logout', 'AuthenticationsController@logout');
        Route::get('/dashboard', 'DashboardsController@index');
    });
    Route::get('/sign-up', 'AuthenticationsController@indexSignUp');
    Route::post('/sign-up', 'AuthenticationsController@signUp');

//EXPERIMENTAL (for testing purposes)
    Route::get('/users', function () {
        $users = User::all();
        return view('tests.users', compact('users'));
    });
    Route::get('/users/update/{id}', function ($id) {
        $user = Movie::where('id', $id)->get();
        return view('tests.update', compact('user'));
    });
    Route::post('/users/update/{id}', function ($id) {
        return redirect('/users');
    });
    Route::post('/users/delete/{id}', function () {
        return redirect('/sign-up');
    });