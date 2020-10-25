<?php

namespace App\Http\Middleware;

use Closure;
// use Auth;
use Illuminate\Support\Facades\Auth;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if($request->age && $request->age<20){
        //     return redirect('home');
        // }

        // if(Auth::check() && Auth::user()->isRole() == 'admin'){
        //     return $next($request);
        // }
        // return redirect('home');

        // if(Auth::user() && Auth::user()->isAdmin()){
        //     return $next($request);
        // }
        // dd('stop');
        
    }
}
