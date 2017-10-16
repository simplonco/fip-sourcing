<?php
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

function fetchSololearnScores($sololearn_url){

  $sololearn_doc = fetchSololearnProfile($sololearn_url);
  $sololearnXPArray = fetchSololearnXP($sololearn_doc);

  return calculateSololearnScores($sololearnXPArray);
}

function fetchSololearnProfile($sololearn_url)
{
  // TODO : ctrl sololearn_profile -> form validation on input?
  // $html = file_get_contents($sololearn_url); //get the html returned from the following url

  $c = curl_init();
  curl_setopt($c, CURLOPT_URL, $sololearn_url);
  curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($c, CURLOPT_SSL_VERIFYHOST,false);
  curl_setopt($c, CURLOPT_SSL_VERIFYPEER,false);
  curl_setopt($c, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:33.0) Gecko/20100101 Firefox/33.0");
  curl_setopt($c, CURLOPT_COOKIE, 'CookieName1=Value;');
  curl_setopt($c, CURLOPT_MAXREDIRS, 10);
  $follow_allowed= ( ini_get('open_basedir') || ini_get('safe_mode')) ? false:true;
  if ($follow_allowed)
  {
    curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1);
  }
  curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 9);
  curl_setopt($c, CURLOPT_REFERER, $sololearn_url);
  curl_setopt($c, CURLOPT_TIMEOUT, 60);
  curl_setopt($c, CURLOPT_AUTOREFERER, true);
  curl_setopt($c, CURLOPT_ENCODING, 'gzip,deflate');
  $html=curl_exec($c);
  $status=curl_getinfo($c);
  curl_close($c);
  preg_match('/(http(|s)):\/\/(.*?)\/(.*\/|)/si',  $status['url'],$link);
  $html=preg_replace('/(src|href|action)=(\'|\")((?!(http|https|javascript:|\/\/|\/)).*?)(\'|\")/si','$1=$2'.$link[0].'$3$4$5', $html);
  $html=preg_replace('/(src|href|action)=(\'|\")((?!(http|https|javascript:|\/\/)).*?)(\'|\")/si','$1=$2'.$link[1].'://'.$link[3].'$3$4$5', $html);

  $sololearn_doc = new DOMDocument();

  libxml_use_internal_errors(TRUE); //disable libxml errors

  if(!empty($html)){ //if any html is actually returned

    $sololearn_doc->loadHTML($html);

    libxml_clear_errors(); //remove errors for yucky html

    return $sololearn_doc;
  } else {
    //TODO : throw understandable error
  }
}

function fetchSololearnXP($sololearnDOMDocument)
{
  $sololearn_xpath = new DOMXPath($sololearnDOMDocument);
  $courses = Config::get('sololearn_constants.courses');
  $sololearn_xp = array();

  foreach($courses as $course)
  {
    $elements = $sololearn_xpath->query("//*[@title='".array_search($course, $courses)."']/following-sibling::p");
    if(!is_null($elements)){
      foreach ($elements as $element){
        preg_match_all('!\d+!', $element->nodeValue, $matches);
        $sololearn_xp[$course] = $matches[0][0];
      }
    }
  }
  return $sololearn_xp;
}

function calculateSololearnScores($sololearnXPArray)
{
  $sololearnScores = array();
  foreach ($sololearnXPArray as $course => $xp) {
    $sololearnScores[$course] = round($xp/Config::get('sololearn_constants.averageXPPerLesson'));
  }
  return $sololearnScores;
}

?>
