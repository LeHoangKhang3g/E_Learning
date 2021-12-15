<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function loadAdmin(){
        return view('admin.index');
    }
}
