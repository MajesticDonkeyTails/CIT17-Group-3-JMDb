<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class AuthenticationsController extends Controller {
    
    //INDICES
    public function indexLogin () {return view('forms.login');}
    public function indexSignUp () {return view('forms.sign-up');}
    
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
    
    //SIGN UP
    public function signUp () {
        //Validate
        $validated_fields = request()->validate([
            'username' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);
        //Encrypt password
        $validated_fields['password'] = bcrypt($validated_fields['password']);
        //Add user to database
        $user = User::create($validated_fields);
        //Redirect
        return redirect('/login');
    }
    
}
