<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class Locale
{
  protected $languages = ['en', 'fr'];

  public function handle($request, Closure $next)
  {
    if(!Session::has('applocale'))
    {
      App::setLocale(Config::get('app.fallback_locale'));
      // Session::put('applocale', Config::get('app.fallback_locale'));
    }
    else
    {
      App::setLocale(Session::get('applocale'));
    }

    return $next($request);
  }
}
