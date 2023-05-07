<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddeware
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::id()){
            if(Auth::user()->id == 1){
                return $next($request);
            }
            else{
                return redirect()->back();
            }
        }
        else{

            return redirect()->back();
        }

    }
}
