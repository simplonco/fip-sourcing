<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $hidden = ['id'];

    protected $fillable = ['candidate_id', 'question_id', 'value', ];

    public function candidate()
    {
        return $this->belongsTo(\User::class, 'candidate_id');
    }

    public function formation()
    {
        return $this->belongsTo(Formation::class, 'formation_id');
    }

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
    public function evaluations(){
        return $this->hasMany(Evaluation::class, 'answer_id');
    }

    public function scopeUser($query, $candidateId){
        return $query->where('candidate_id', $candidateId);
    }


}
