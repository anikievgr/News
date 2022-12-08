<?php
$date = date("Y-m-d");
$newstitle = $_POST['newsTitle'];
$newsText = $_POST['newsText'];
spl_autoload_register(function($ClassName){
   require '../classes/'.$ClassName.'.php';
});

$bd = new bd;
$id = $_GET['id'];
$bd->update($newstitle,$newsText,$date,$id )
?>