<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index () {
        //Call on a global method to get variables from the URL
        $id = request('id');
        //dd() is dial down, which dumps the variable then ends the function regardless of any remaining lines of codes. This function is for debugging purposes only.
        $message = request('message');
        //Pass variables to the sign-up.blade.php
        return view('sample/sign-up', [
            'message' => $message
        ]);
    }
}
