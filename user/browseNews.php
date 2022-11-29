<?php 
$connect =  mysqli_connect('localhost','root','root','news');
if(!$connect){
   echo 'erore';
}

$news = mysqli_query($connect, "SELECT * FROM `newlist` WHERE id = $segments[4];");
$news = mysqli_fetch_all($news);
foreach($news as $news){
   $NEWS[] = $news;
}
echo '<pre>';
 var_dump( $NEWS);
echo '</pre>';
?>