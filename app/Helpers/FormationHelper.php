<?php
use User;


function getApplyingFormationCandidates($formation_id)
{
  $learnerRoleId = 2;

  $candidates = User::whereHas('roles', function ($q) use ($learnerRoleId) {
    $q->where('role_id', $learnerRoleId);
  })->whereHas('formations', function ($q) use ($formation_id) {
    $q->where('formation_id', $formation_id);
  })->where('application_sent', true);

  return $candidates;
}

