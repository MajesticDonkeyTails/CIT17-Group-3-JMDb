<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
    
    //User accessible
    public function dashboard_index () {return view('dashboard');}
    
    //Unused laravel directories
    public function index () {return view('welcome');}
    
}