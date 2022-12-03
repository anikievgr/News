<?php
echo "OK";
$date = date("Y-m-d");
var_dump($newstitle);
$newstitle = $_POST['newsTitle'];
$newsText = $_POST['newsText'];
var_dump($photo);
var_dump ($newstitle);
var_dump ($newsText);
$connect =  mysqli_connect('localhost','root','root','news');
if(!$connect){
   echo 'erore';
}
mysqli_query($connect, "INSERT INTO `newlist` (`id`, `newsTitle`, `newsText`, `newsIMG`, `newsDate`)
 VALUES (NULL, '$newstitle', '$newsText', 'NULL', '$date');
");

?>
