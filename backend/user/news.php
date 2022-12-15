<?php
spl_autoload_register(function($ClassName){
   require '../classes/'.$ClassName.'.php';
});
$bd = new bd;
global $newsList;
$newsList = $bd->itemsBd;
require("templates/user-templates/list_news_pattern.php")
?>

   
