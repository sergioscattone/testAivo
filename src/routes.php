<?php
// Retrieve Regular Info About Facebook User
$app->get('/profile/facebook/{idFacebook}', function ($request, $response) {
  if (!isValidToken($request))
      return $response->withStatus(401);
  $parameters["idFacebook"]     = $request->getAttribute('idFacebook');
  $headerToken                  = $request->getHeader("TOKEN");
  $parameters["token"]          = $headerToken[0];
  $parameters["dataRequested"]  = "id,first_name,last_name";
  return $response->withJson(makeCurlRequest("https://graph.facebook.com/",$parameters));
});

// Retrieve Full Info Facebook User
$app->get('/profile/facebookFull/{idFacebook}', function ($request, $response) {
  if (!isValidToken($request))
      return $response->withStatus(401);
  $parameters["idFacebook"]     = $request->getAttribute('idFacebook');
  $headerToken                  = $request->getHeader("TOKEN");
  $parameters["token"]          = $headerToken[0];
  $parameters["dataRequested"]  = "id,first_name,last_name,birthday,gender,email,cover,website";
  return $response->withJson(makeCurlRequest("https://graph.facebook.com/",$parameters));
});

// Retrieve Context About Facebook User
$app->get('/profile/facebookContext/{idFacebook}', function ($request, $response) {
  if (!isValidToken($request))
      return $response->withStatus(401);
  $parameters["idFacebook"]     = $request->getAttribute('idFacebook');
  $headerToken                  = $request->getHeader("TOKEN");
  $parameters["token"]          = $headerToken[0];
  $parameters["dataRequested"]  = "context,education,work";
  return $response->withJson(makeCurlRequest("https://graph.facebook.com/",$parameters));
});