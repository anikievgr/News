<?php
echo "sdf";
spl_autoload_register(function($ClassName){
   require '../../classes/'.$ClassName.'.php';
});
$bd = new bd;
$newsList = $bd->itemsBd;
 require("templates/admin_templates/update_list_pattern.php")
?>