<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserCheck
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
      /*echo "<h1>This text is from the UserCheck Middleware</h1>";*/
      if ($request->Login && $request->Login=admin){
        return redirect('admin');
      }
        return $next($request);
    }
}
