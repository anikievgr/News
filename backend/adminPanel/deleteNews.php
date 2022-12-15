<?php
spl_autoload_register(function($ClassName){
   require '../../classes/'.$ClassName.'.php';
});
$bd = new bd;
$newsList = $bd->itemsBd;
require("templates/admin_templates/delete_pattern.php")
?>
