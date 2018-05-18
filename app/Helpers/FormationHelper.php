<?php

function getApplyingFormationCandidates($session_id)
{
  $learnerRoleId = 2;

  $candidates = User::whereHas('roles', function ($q) use ($learnerRoleId) {
    $q->where('role_id', $learnerRoleId);
  })->whereHas('sessions', function ($q) use ($session_id) {
    $q->where('session_id', $session_id);
  })->where('application_sent', true);

  return $candidates;
}

