<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $hidden = ['id'];

  protected $fillable = ['title'];

}
