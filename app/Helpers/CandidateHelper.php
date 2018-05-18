<?php

function calculateScore($candidate){
  return get_score($candidate) + get_sololearn_score($candidate);
}


function get_score($candidate)
{
  return get_formation_score($candidate) + $candidate->get_progress()*10 + $candidate->application_sent*30;
}


function get_formation_score($candidate)
{
  $formation_score = $candidate->sessions()->first() != null? 20 : 0;
  return $formation_score;
}

function get_sololearn_score($candidate)
{
  return $candidate->html_score + $candidate->css_score + $candidate->js_score + $candidate->php_score;
}

function updateSuccess($candidate)
{
  $candidate->score = calculateScore($candidate);
  $success = $candidate->candidate_success();
  if(!$success->progress_success && $candidate->get_progress() == 5){
    $success->progress_success = true;
  }
  if($candidate->score >250 && !$success->hi_score_success){
    $success->hi_score_success = true;
  }
  if($candidate->html_score > 35 && !$success->html_success){
    $success->html_success = true;
  }
  if($candidate->css_score > 35 && !$success->css_success){
    $success->css_success = true;
  }
  if($candidate->js_score > 35 && !$success->js_success){
    $success->js_success = true;
  }
  if($candidate->php_score > 35 && !$success->php_success){
    $success->php_success = true;
  }

  return $success;
}
