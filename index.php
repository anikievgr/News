<?php
require "array.php";
spl_autoload_register(function($ClassName){
   require 'classes/'.$ClassName.'.php';
});
$uri =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$segments = explode('/', trim($uri, '/'));





//  echo '<pre>';
//    var_dump($array);
//    echo '</pre>';



$i = 2;
foreach ($array as $key => $array) {
   $check++;
   if($key == $segments[$i]){
      foreach ($array as $value) {
         $check++;
        $objN = new $value($segments[3]);
      }
   }
}

?>
