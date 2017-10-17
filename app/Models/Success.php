<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Success extends Model
{
  protected $hidden = ['id'];

  protected $fillable = ['candidate_id', 'welcome_success', 'application_sent_success', 'progress_success', 'html_success', 'css_success', 'js_success', 'php_success', 'hi_score_success'];

  public function candidate()
  {
    return $this->belongsTo('App\User', 'candidate_id');
  }

}
