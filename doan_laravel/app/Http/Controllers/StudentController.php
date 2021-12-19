<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    function index(){
        
        $accountInfo =Auth::user();
        $accountInfo->password = "";
        return view('student.index',["accountInfo"=>$accountInfo]);
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
