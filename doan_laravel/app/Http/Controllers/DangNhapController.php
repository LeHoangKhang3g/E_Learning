<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DangNhapController extends Controller
{
    function formDangNhap(){
        return view('dang-nhap');
    }
    function xuLyDangNhap(Request $req){
        if($req->username=='1'&&$req->password =='1'){
            return redirect()->route('admin');
        }
        if($req->username=='2'&&$req->password =='2'){
            return redirect()->route('hoc-sinh');
        }

    }
}
