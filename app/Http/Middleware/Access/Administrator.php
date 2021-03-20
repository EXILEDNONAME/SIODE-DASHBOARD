<?php

namespace App\Http\Middleware\Access;
use Illuminate\Http\Request;
use Auth;
use Closure;

class Administrator {
  public function handle(Request $request, Closure $next) {
    if( Auth::user()->roles->accesses->name  == 'Administrator') {
      return $next($request);
    }
    else {
      return redirect('/dashboard');
    }
  }
}