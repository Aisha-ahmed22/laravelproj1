<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;//bta3 el object elly 3amel login y3ny btrag3 elly eldata bta3 el login
//laken elly b a small(auth) de lw msh 3amel logain btrag3o lpage el login
class NewCheck
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
        if (Auth::user()-> age < 21 )//class::function()->column
        {
            return redirect()->back();
        }
        return $next($request);
    }
}
