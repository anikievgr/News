<?php
$date = date("Y-m-d");
var_dump($newstitle);
$newstitle = $_POST['newsTitle'];
$newsText = $_POST['newsText'];
var_dump ($addNews);
$connect = mysqli_connect('localhost','root','root','newlist');
mysqli_query($connect, "INSERT INTO `newlist` (`id`, `newsTitle`, `newsText`, `newsIMG`, `newsDate`) VALUES (NULL, 'sadf', 'asdfa', NULL, '2022-11-23');
");
?>