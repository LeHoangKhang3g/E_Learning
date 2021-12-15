<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(){
        return view('student.index');
    }
    
    function signOut(){
        Auth::logout();
        return redirect()->route('index');
    }

    function formUpdateProfile(){
        return "";
    }
    function postUpdateProfile(){
        return "";
    }
    function formChangePassword(){
        return "";
    }
    function postChangePassword(){
        return "";
    }


    function formJohnClassroom(){
        return "";
    }
    function postJohnClassroom(){
        return "";
    }
}
