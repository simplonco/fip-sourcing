<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
   protected $fillable = ['answer_id', 'recruiter_id', 'value'];

    public function recruiters(){
        return $this->belongsTo(User::class, 'recruiter_id');
    }
    public function answers(){
        return $this->belongsTo(Answer::class, 'answer_id');
    }

    public function scopeForRecruiter($query, $recruiterId, $answerId){
        return $query->where('recruiter_id', $recruiterId)->where('answer_id', $answerId);
    }
}
