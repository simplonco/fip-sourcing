<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsTeacher{
	
	
	/**
	*Handle an incoming request.
		*
		* @param  \Illuminate\Http\Request  $request
		* @param  \Closure  $next
		* @return mixed
		*/
		public function handle($request, Closure $next)
		{
		if ( Auth::user()->roles->implode('slug') !== 'forma') {
			return redirect('home');
		}
		return $next($request);
	}
}
