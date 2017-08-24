<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class ProExperience extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'society_name', 'society_address', 'contract_type', 'contract_duration', 'position_held'
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

}
