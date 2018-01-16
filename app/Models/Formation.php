<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
  protected $fillable = ['name', 'description', 'city', 'year', 'begin_session', 'end_session'];

  public function recruiters()
  {
    return $this->hasMany(\User::class);
  }

  public function notes()
  {
    return $this->hasMany(App\Models\Note::class);
  }
}