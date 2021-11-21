<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    
    function app(){
        return view('layouts/app');
    }
}
