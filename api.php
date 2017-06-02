<?php

include_once("OAuth.php");

echo "<h1>Test API</h1>" ;

// Récuperer un Token si on en a pas déjà un qui soit valide.
$reponse = oauth_recuperer_token(URL_TOKEN) ;
$token = $reponse['token'] ;
$secret = $reponse['secret'] ;

// appel du WS clients
$url_ws_client = URL_WS_CLIENT . "/34159" ;

echo "<p>Infos clients sur : $url_ws_client</p>" ;

$reponse = oauth_recuperer_ws($url_ws_client,$token,$secret);

echo "<pre>" ;
var_dump($reponse);
echo "</pre><hr>" ;