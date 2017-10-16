<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\ProExperience;

class User extends Authenticatable
{
  use Notifiable;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'last_name', 'first_name', 'email', 'password',
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];

  public function roles()
  {
    return $this->belongsToMany('App\Role');
  }

  public function formations()
  {
    return $this->belongsToMany('App\Formation', 'formation_user');
  }

  public function candidate_notes()
  {
    return $this->hasMany('App\Note', 'candidate_id');
  }

  public function recruiter_notes()
  {
    return $this->hasMany('App\Note', 'recruiter_id');
  }

  public function candidate_success()
  {
    return $this->hasOne('App\Success', 'candidate_id')->first();
  }

  public function is_operationnal_ok()
  {
    return $this->availability && $this->efforts && $this->computers;
  }

  public function is_administrative_ok()
  {
    return $this->nationality && $this->birth_date && $this->gender && $this->phone && $this->postal_code && $this->city && $this->address && $this->status && $this->number_social_security;
  }

  public function is_experience_ok()
  {
    return $this->experience_programming && $this->course && $this->english && $this->today;
  }

  public function is_coding_ok()
  {
    return $this->coding && true;
  }

  public function is_projection_ok()
  {
    return $this->hero && $this->dev_qualities && $this->personal_goal && $this->dev_point && $this->superpower;
  }

  public function get_progress()
  {
    return $this->is_operationnal_ok() + $this->is_administrative_ok() + $this->is_experience_ok() + $this->is_coding_ok() + $this->is_projection_ok();
  }

}
