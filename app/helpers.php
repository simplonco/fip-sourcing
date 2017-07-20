<?php
use App\User;

// My common functions
function fetchBadges($codecademy_url)
{
  // TODO : ctrl codecademy_profile -> form validation on input?
  $html = file_get_contents($codecademy_url); //get the html returned from the following url

  $codecademy_doc = new DOMDocument();
  //
  libxml_use_internal_errors(TRUE); //disable libxml errors

  if(!empty($html)){ //if any html is actually returned

    $codecademy_doc->loadHTML($html);
    libxml_clear_errors(); //remove errors for yucky html

    $codecademy_xpath = new DOMXPath($codecademy_doc);

    //get all the h3
    $codecademy_row = $codecademy_xpath->query('//h3');
    // The third does the trick
    return $codecademy_row[2]->nodeValue;
  }
}
?>
