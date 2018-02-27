<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
  protected $hidden = ['id'];

  protected $fillable = ['creator_id', 'formation_id', 'title'];

  public function creator()
  {
    return $this->belongsTo(\User::class, 'creator_id');
  }

  public function formation()
  {
    return $this->belongsTo(Formation::class, 'formation_id');
  }

}
