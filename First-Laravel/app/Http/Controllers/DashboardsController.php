<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardsController extends Controller {
    
    //USER DASHBOARD
    public function index () {
        return view('dashboard.index');
    }
    
}
