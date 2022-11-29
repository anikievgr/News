<?php
$uri =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//

$segments = explode('/', trim($uri, '/'));

// echo"<pre>";
// var_dump($segments);
// echo"</pre>";
include "header.php";
switch($segments[2]){
  case "":
     require 'input.php';
     break;
 case  "news":
  if($segments[3] == "" ){
   require 'user/news.php';
   }elseif ($segments[3] == "search") {
    require 'user/browseNews.php';
   }
    break;
 case  "admin":
    require 'adminPanel/addNews.php';
    break;
  }
  include "foter.php";
?>
