<?php
spl_autoload_register(function($ClassName){
   require 'classes/'.$ClassName.'.php';
});
$uri =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($uri, '/'));

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
    $objA -> OpenAdminPanel($segments[3]);
    break;
  }
  include "foter.php";
?>
