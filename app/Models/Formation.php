<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
  protected $fillable = ['name', 'description', 'city', 'year', 'begin_session', 'end_session'];

  public function recruiters()
  {
    return $this->hasMany('App\User');
  }

  public function notes()
  {
    return $this->hasMany('App\Note');
  }
}
