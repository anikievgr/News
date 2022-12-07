<?php
require "array.php";
spl_autoload_register(function($ClassName){
   require 'classes/'.$ClassName.'.php';
});
$uri =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$segments = explode('/', trim($uri, '/'));


include "header.php";


//  echo '<pre>';
//    var_dump($segments);
//    echo '</pre>';
   


$i = 2;
foreach ($array as $key => $array) {
         // echo"[" .$key."]";
         // echo"[" .$segments[$i]."]";
         //   echo '</br>';
   if($key == $segments[$i]){
      foreach ($array as $value) {
         // echo $value;
         //   echo '</br>';
         $objN = new $value($segments[3]);
   
      }
   }
}
	
  include "foter.php";
?>
