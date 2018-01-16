<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  protected $hidden = ['id'];

  protected $fillable = ['creator_id', 'formation_id', 'category_id', 'title', 'default_value', 'type', 'mandatory', 'goal', 'weight'];

  protected $casts = [
    'default_value' => 'array'
  ];

  public function creator()
  {
    return $this->belongsTo(\User::class, 'creator_id');
  }

  public function formation()
  {
    return $this->belongsTo(Formation::class, 'formation_id');
  }

  public function category()
  {
    return $this->belongsTo(Category::class, 'category_id');
  }
}
