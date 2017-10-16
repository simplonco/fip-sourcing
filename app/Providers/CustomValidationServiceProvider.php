<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class CustomValidationServiceProvider extends ServiceProvider
{
  /**
  * Bootstrap the application services.
  *
  * @return void
  */
  public function boot()
  {
    Validator::extend('sololearn', function($attribute, $value, $parameters, $validator){
      // $url_pattern = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
$url_pattern = '/^(https?:\/\/www.sololearn.com\/Profile\/)([\d]+)*$/';
      return ($value == null || preg_match($url_pattern, $value));
    });
  }

  /**
  * Register the application services.
  *
  * @return void
  */
  public function register()
  {
    //
  }
}
