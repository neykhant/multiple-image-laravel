<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class isAdmin
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
        // if(Auth::user() && Auth::user()->isAdmin()){
        //     return $next($request);
        // }
        // dd('stop');

        /**
         * using Auth::user() && Auth::user()->isAdmin() 
         */
        if($request->user() && $request->user()->isAdmin() ){
            return $next($request);
        }
        // dd('stop');
        return redirect()->route('admin.welcome');
    }
}
