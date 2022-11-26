<?php
$uri =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// echo $uri;

$segments = explode('/', trim($uri, '/'));
switch($segments[1]){
 case  "news":
   require 'user/news.php';
    break;
 case  "admin":
   require 'admin/addNews.php';
    break;
  }


?>