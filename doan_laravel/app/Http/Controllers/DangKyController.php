<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DangKyController extends Controller
{
    function formDangKy(){
        return view('dang-ky');
    }
}
