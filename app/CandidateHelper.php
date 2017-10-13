<?php
use App\User;

function calculateScore($candidate){
  return get_score($candidate) + get_sololearn_score($candidate);
}


function get_score($candidate)
{
  return get_formation_score($candidate) + $candidate->get_progress()*10 + $candidate->application_sent*30;
}


function get_formation_score($candidate)
{
  $formation_score = $candidate->formations()->first() != null? 20 : 0;
  return $formation_score;
}

function get_sololearn_score($candidate)
{
  return $candidate->html_score + $candidate->css_score + $candidate->js_score + $candidate->php_score;
}

?>
