<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HocSinhController extends Controller
{
    function hocSinh(){
        return view('student.index');
    }
}
