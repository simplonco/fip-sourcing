<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
  protected $fillable = ['name', 'description', 'city', 'year', 'begin_session', 'end_session'];
}
