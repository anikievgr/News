<?php 
$connect =  mysqli_connect('localhost','root','root','news');
if(!$connect){
   echo 'erore';
}
$news = mysqli_query($connect, "SELECT * FROM `newlist`");
$news = mysqli_fetch_all($news);
foreach($news as $news){
  $newsList[] = $news; 
}
$uri =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($uri, '/'));
mysqli_query($connect, "DELETE FROM `newlist` WHERE `newlist`.`id` = $segments[4]");
?>