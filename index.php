<?php
require "array.php";
spl_autoload_register(function($ClassName){
   require 'classes/'.$ClassName.'.php';
});
$uri =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($uri, '/'));
include "header.php";
 echo '<pre>';
   var_dump($segments);
   echo '</pre>';
$i = 2;


foreach ($array as $key => $array) {
         echo"[" .$key."]";
         echo"[" .$segments[$i]."]";
           echo '</br>';
   if($key == $segments[$i]){
      foreach ($array as $value) {
         echo $value;
           echo '</br>';
         $objN = new $value($segments[3]);
         die();
      }
   }
}
	// foreach ($array as $kayArray => $sub) {
   //    if ($keyOri != $segments[$i]) {
   //       echo"[" .$kayArray."]";
   //       echo"[" .$segments[$i]."]";
   //       echo "Равно";
   //       echo '</br>';
   //       $i++;
   //       foreach ($sub as  $value) {
   //       echo $value;
   //       }
   //    // else{
   //    //    echo ".....";
   //    // echo $kayArray;
   //    // echo '</br>';
	// 	// foreach ($sub as $elem) {
   //    // echo "..........";
	// 	// 	echo $elem;
   //    // echo '</br>';
   //    // }
	// 	// }
   //    echo '</br>';
   //  }
   
	// }

switch($segments[2]){
  case "":
     require 'input.php';
     break;
 case  "news":
    $objN = new OpenNews($segments[3]);
    break;
 case  "admin":
    $objA = new OpenAdmin($segments[3]);
    break;
  }
  include "foter.php";
?>
