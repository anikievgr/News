<?php
spl_autoload_register(function($ClassName){
   require '../classes/'.$ClassName.'.php';
});
$bd = new bd;
$newsList = $bd->itemsBd;
require("templates/update_list_templates.php")
?>