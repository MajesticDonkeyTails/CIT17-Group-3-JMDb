<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

//NOTE: This controller will contain every activity from the canvas site in accordance to screenshotting proofs

class ActivitiesController extends Controller {
    
    //September 10, 2020 - Routes
    public function route2 () {return view('activity-1-routes/route-2', ['variable' => 123]);}
    public function route3 () {
        dd(request('category'));
        return view('activity-1-routes/route-3');
    }
    public function route4 () {return view('activity-1-routes/route-2');}
    public function route5 () {return view('activity-1-routes/route-5', ['variable1' => 123, 'variable2' => 456]);}
    public function route6 () {return view('activity-1-routes/route-6', ['array' => array('1', '2', '3', '4', '5', '6')]);}

    //Intermission: September 11, 2020
    public function getQuotes () {
        return [
            ['quote' => "Suckin' at something is the first step of being sorta good at something'.", 'author' => 'Jake The Dog'],
            ['quote' => "Let go of the past to hold on to the future.", 'author' => 'The Clone Wars, Morals'],
            ['quote' => "Fear is a malleable weapon.", 'author' => 'The Clone Wars, Morals'],
            ['quote' => "In a war, one must eventually choose a side.", 'author' => 'The Clone Wars, Morals'],
            ['quote' => "In a war, one must eventually choose a side.", 'author' => 'Ford'],
        ];
    }
    public function filterByAuthor ($author) {
        //Filter array
        $filtered_quotes = array_filter($this->getQuotes(), function ($quote) use ($author) {
            if (strpos(strtolower($quote['author']), strtolower($author)) !== false) {
                return true;
            }
        });
        return view('intermission/quotes', ['quotes' => $filtered_quotes]);
    }
    public function products () {
        //Fetch all the products from the database
        $products = DB::table('products')->get();
        //Fetch products with prices > 100
        $products = DB::table('products')->where('price', '>', '100')->get();
        
        return view('intermission/products', ['products' => $products]);
    }
    
    //September 13, 2020 - Database Querying
    public function averages () {
        //REQUIREMENT 1: Get ONLY the name, section and strand columns of the student that has the highest fourth grading average.
        (function () {
            $table = DB::table('averages');
            $student = $table->select('Name', 'Section', 'Strand')->where('FourthGrading', '=', $table->max('FourthGrading'))->get();
            //dd($student);
        })();
        
        //REQUIREMENT 2: Get all the records that has an average of more than or equal to 90.00 in their final_average.
        (function () {
            $table = DB::table('averages');
            $students = $table->select()->where('FinalAverage', '>=', 90.00)->get();
            //dd($students);
        })();
        
        //REQUIREMENT 3: Arrange all the records in descending order depending on their first_final_grading.
        (function () {
            $table = DB::table('averages');
            $students = $table->select()->orderby('FirstFinalGrading', 'desc')->get();
            //dd($students);
        })();
        
        //REQUIREMENT 4: Get all the records in the strand of STEM with a grade level of 12 and arrange them in descending order based on their second_final_grading.
        (function () {
            $table = DB::table('averages');
            $students = $table->select()->where('Strand', '=', 'STEM')->where('Level', '=', '12')->orderby('SecondFinalGrading', 'desc')->get();
            //dd($students);
        })();
        
        //REQUIREMENT 5: Get ONLY the top 5 students in grade level 11 based on their first_grading average.
        (function () {
            $table = DB::table('averages');
            $students = $table->select()->orderby('FirstFinalGrading', 'desc')->take(5)->get();
            //dd($students);
        })();
    }
    
}


/*
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
*/