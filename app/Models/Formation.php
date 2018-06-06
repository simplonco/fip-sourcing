<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
  protected $fillable = ['name', 'description'];
  protected $appends = ['selected'];

  public function recruiters()
  {
    return $this->hasMany(\User::class);
  }

  public function notes()
  {
    return $this->hasMany(App\Models\Note::class);
  }

  public function sessions() {
      return $this->hasMany(Session::class);
  }

  public function questionnaires() {
      return $this->belongsToMany(Questionnaire::class);
  }
}
