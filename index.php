<?php
$uri =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//  echo $uri;

$segments = explode('/', trim($uri, '/'));

echo"<pre>";
var_dump($segments);
echo"</pre>";
include "header.php";
switch($segments[0]){
  case "News":
     require 'choice.php';
     break;
 case  "news":
   require 'user/news.php';
    break;
 case  "admin":
    require 'adminPanel/addNews.php';
    break;
  }
  include "foter.php";
?>
