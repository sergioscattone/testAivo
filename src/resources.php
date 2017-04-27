<?php

function undercaseToCapitalCase($array){
  $arrayAux = Array();
  foreach ($array as $key => $a){
      $kAux = preg_replace_callback(
    '/_([^_])/',
    function (array $m) {
        return ucfirst($m[1]);
    },
    $key);
    $arrayAux[$kAux] = $a;
  }
  return $arrayAux;
}

function isValidToken($request){
  if (!$request->hasHeader("TOKEN")
    || empty($request->getHeader("TOKEN")))
    return false;
  return true;
}

function makeCurlRequest($endpoint,$parameters){
    $ch = curl_init();
    $postFields = array('access_token' => $parameters["token"]);
    curl_setopt($ch, CURLOPT_URL, $endpoint.$parameters["idFacebook"]."?fields=".$parameters["dataRequested"]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    $returnJson = curl_exec($ch);
    curl_close($ch);
    return undercaseToCapitalCase(json_decode($returnJson));
}