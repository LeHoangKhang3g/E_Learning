<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DangNhapController extends Controller
{
    function formDangNhap(){
        return view('dang-nhap');
    }
    function xuLyDangNhap(Request $req){

        if(Auth::attempt($req->only('username', 'password')))
        {
            return redirect()->route('admin');
        }
        else
        {
            return redirect('index');
        }
    }
}
