<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DangNhapController extends Controller
{
    function formDangNhap(){
        return view('login');
    }
    function xuLyDangNhap(Request $req){

        if(Auth::attempt($req->only('username', 'password')))
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
            return redirect('index');
        }
    }
}
