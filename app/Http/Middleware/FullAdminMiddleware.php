<?php
namespace App\Http\Middleware;
use Closure;
class FullAdminMiddleware
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
      
        if (\Auth::user()->isGuest())
        return redirect('/');
    return $next($request);
    }
}