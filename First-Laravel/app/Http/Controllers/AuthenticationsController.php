<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthenticationsController extends Controller {
    
    //INDICES
    public function index () {return view('login');}
    
    //LOGIN
    public function login () {
        //Validate
        request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        //Authenticate
        if (Auth::attempt([
            'email' => request()->email,
            'password' => request()->password,
        ]))
        //Success
        {return redirect('/dashboard');}
        //Fail
        return back()->withErrors(['credentials' => 'Incorrect email or password.']);
    }
    
    //LOGOUT
    public function logout () {
        Auth::logout();
        return redirect('/login');
    }
    
}
