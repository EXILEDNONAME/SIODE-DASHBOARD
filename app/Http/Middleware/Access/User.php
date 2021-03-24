<?php

namespace App\Http\Middleware\Access;
use Illuminate\Http\Request;
use Auth;
use Closure;

class User {
  public function handle(Request $request, Closure $next) {
    if( Auth::user()->roles->accesses->name  == 'User') {
      return $next($request);
    }
    else {
      return redirect('/dashboard');
    }
  }
}
