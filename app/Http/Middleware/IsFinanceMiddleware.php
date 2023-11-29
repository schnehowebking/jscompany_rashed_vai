<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsFinanceMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
   * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
   */
  public function handle(Request $request, Closure $next)
  {
    if (\auth()->user()->role == 'finance') {
      return $next($request);
    }
    return back()->with('error', 'Only Admin can access the page');
  }
}