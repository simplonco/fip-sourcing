<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
  protected $hidden = ['id'];

  public function candidates()
  {
    return $this->belongsTo('App\User', 'candidate_id');
  }

  public function recruiter()
  {
    return $this->belongsTo('App\User', 'recruiter_id');
  }

  public function formation()
  {
    return $this->belongsTo('App\Formation', 'formation_id');
  }
}
