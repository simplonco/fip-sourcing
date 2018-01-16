<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
  protected $hidden = ['id'];

  protected $fillable = ['candidate_id', 'question_id', 'value'];

  public function candidate()
  {
    return $this->belongsTo(\User::class, 'candidate_id');
  }

  public function question()
  {
    return $this->belongsTo(App\Models\Question::class, 'question_id');
  }

}
