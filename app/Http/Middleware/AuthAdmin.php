<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthAdmin
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
        if(session('role') === "admin")
        {
            return $next($request);
        }
        else if(session('role') === "team_member"){
             return $next($request);
        }
        else if(session('role') === "support_member"){
             return $next($request);
       } else if(session('role') === "customer"){
             return $next($request);
        
        }else{
            session()->flush();
            return redirect()->route('login');
        }
        return $next($request);
    }
}

// if(Auth::user()->utype === 'ADM')
//             {
//                 session(['utype'=>'ADM']);
//                 return redirect()->route('frontend');
//             }
//             else if(Auth::user()->utype === 'USR')
//             {
//                 session(['utype'=>'USR']);
//                 return redirect()->route('frontend');
//             }

// else if(Auth::user()->utype === 'DVM')
//             {
//                 session(['utype'=>'DVM']);
//                 return redirect()->route('deliveryman.dashboard');
//             }
