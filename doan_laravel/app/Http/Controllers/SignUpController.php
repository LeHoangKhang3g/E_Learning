<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    function formSignUp(){
        return view('sign-in');
    }

    function postSignUp(){
        return "";
    }
}
