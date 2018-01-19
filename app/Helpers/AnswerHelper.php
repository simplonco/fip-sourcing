<?php

use App\Models\Answer;

function findAnswersByCandidateAndFormation($candidate_id, $formation_id){
  $matchThese = ['candidate_id' => $candidate_id, 'formation_id' => $formation_id];
  $results = Answer::where($matchThese)->get();
  return $results;
}


