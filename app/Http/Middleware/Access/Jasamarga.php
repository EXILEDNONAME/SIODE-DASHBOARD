<?php

namespace App\Http\Middleware\Access;
use Illuminate\Http\Request;
use Auth;
use Closure;

class Jasamarga {
  public function handle(Request $request, Closure $next) {
    if( Auth::user()->roles->accesses->name  == 'Jasamarga') {
      return $next($request);
    }
    else {
      return redirect('/dashboard');
    }
  }
}
