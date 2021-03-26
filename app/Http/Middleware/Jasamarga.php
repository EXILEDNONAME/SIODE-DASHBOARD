<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Auth;
use Closure;

class Jasamarga {
  public function handle(Request $request, Closure $next, String $role) {
    $id = Auth::user()->roles->id;

    if (Auth::user()->roles) {
      if( Auth::user()->roles->name == 'Administrator') {
        return $next($request);
      }
      else {
        return redirect('/dashboard');
      }
    }

  }
}
