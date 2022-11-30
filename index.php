<?php
spl_autoload_register(function($ClassName){
   require 'classes/'.$ClassName.'.php';
});
$uri =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
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
    $objN = new OpenNews();
    $objN->OpenNewsList($segments[3]);
    break;
 case  "admin":
    $objA = new OpenAdmin();
    $objA -> OpenAdminPanel();
    break;
  }
  include "foter.php";
?>
