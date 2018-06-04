<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = ['city', 'year', 'begin_session', 'end_session', 'application_start_date', 'application_end_date', 'formation_id'];
    protected $dates = ['begin_session', 'end_session'];

    public function formation() {
        return $this->belongsTo(Formation::class);
    }

    public function questionnaires() {
        return $this->hasManyThrough(Questionnaire::class, Formation::class);
    }

    public function candidats () {
        return $this->belongsToMany(User::class);
    }

    
}
