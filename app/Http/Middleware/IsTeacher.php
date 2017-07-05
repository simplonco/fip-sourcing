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
		if ( Auth::user()->roles->implode('slug') !== 'former') {
			if ( Auth::user()->roles->implode('slug') == 'admin'){
				return redirect('admin');
			}
			else {
				return redirect('learner');
			}
		}
		return $next($request);
	}
}
