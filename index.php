<?php
$uri =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//  echo $uri;

$segments = explode('/', trim($uri, '/'));

echo"<pre>";
var_dump($segments);
echo"</pre>";
require 'header.php';
switch($segments[2]){
  case "":
     require 'choice.php';
     break;
 case  "news":
   require 'user/news.php';
    break;
 case  "admin":
    require 'adminPanel/addNews.php';
    break;
  }
require 'foter.php';
?>
