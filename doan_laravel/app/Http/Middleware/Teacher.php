<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Teacher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->account_type_id == 2)
        {
            return $next($request);
        }
        else if(Auth::user()->account_type_id==1)
        {
            return redirect()->route('admin');
        }
        else if(Auth::user()->account_type_id==3)
        {
            return redirect()->route('student');
        }
       return redirect()->route('index');
    }
}
