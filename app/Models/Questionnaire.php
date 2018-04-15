<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
  protected $hidden = ['id'];

  protected $fillable = ['creator_id', 'formation_id', 'title'];

  public function formation()
  {
    return $this->belongsToMany(Formation::class);
  }

  public function questions() {
      return $this->hasMany(Question::class);
  }

}
