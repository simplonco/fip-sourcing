<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class PaidFormation extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name', 'begin_date', 'end_date', 'contact'
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

}
