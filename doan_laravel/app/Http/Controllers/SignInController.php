<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    function formSignIn(){
        return view('sign-in');
    }
    function postSignIn(SignInRequest $req){
        
        if (Auth::attempt(['username' => $req->username, 'password' => $req->password]))
        {
            if(Auth::user()->account_type_id==1)
            {
                return redirect()->route('admin');
            }
            else if(Auth::user()->account_type_id==2)
            {
                return redirect()->route('teacher');
            }
            else if(Auth::user()->account_type_id==3)
            {
                return redirect()->route('student');
            }
        }
        else
        {
            return redirect()->route('sign-in')->with('error','Đăng nhập thất bại');   
        }
    }
}
