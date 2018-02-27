<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  protected $hidden = ['id'];

  protected $fillable = ['questionnaire_id', 'category_id', 'title', 'default_value', 'type', 'mandatory', 'goal', 'weight'];

  protected $casts = [
    'default_value' => 'array'
  ];

  public function questionnaire()
  {
    return $this->belongsTo(Questionnaire::class, 'questionnaire_id');
  }

  public function category()
  {
    return $this->belongsTo(Category::class, 'category_id');
  }
}
