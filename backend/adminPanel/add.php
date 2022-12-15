<?php
spl_autoload_register(function($ClassName){
   require '../../classes/'.$ClassName.'.php';
});
echo "OK";
$date = date("Y-m-d");
var_dump($newstitle);
$newstitle = $_POST['newsTitle'];
$newsText = $_POST['newsText'];
$bd = new bd;
$bd->add($newstitle, $newsText, $date);
?>
