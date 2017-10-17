<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
  protected $hidden = ['id'];

  protected $fillable = ['candidate_id', 'recruiter_id', 'formation_id', 'hero_note', 'dev_qualities_note', 'personal_goal_note', 'dev_point_note', 'superpower_note', 'comment'];

  public function candidates()
  {
    return $this->belongsTo(\User::class, 'candidate_id');
  }

  public function recruiter()
  {
    return $this->belongsTo(\User::class, 'recruiter_id');
  }

  public function formation()
  {
    return $this->belongsTo(App\Models\Formation::class, 'formation_id');
  }
}
