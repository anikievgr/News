<?php 
$connect =  mysqli_connect('localhost','root','root','news');
if(!$connect){
   echo 'erore';
}
$uri =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($uri, '/'));
$news = mysqli_query($connect, "SELECT * FROM `newlist` WHERE id = $segments[4];");
$news = mysqli_fetch_all($news);
foreach($news as $news){
   $NEWS = $news;
}
// echo '<pre>';
//  var_dump( $NEWS);
// echo '</pre>';
?>
<div class="chek-news" style=" width: 50%;
  height: auto;
  background-color: #e5e5e5;
    position: absolute;
  left: 50%; 
  border: 1px solid black;

  transform: translate(-50%, 0 );">
  <div class="text" style="display: flex;   justify-content: space-around;">
    <p><?=$NEWS[1]?></p>
     <p><?=$NEWS[4]?></p>
     </div>
      <p><?=$NEWS[2]?></p>
</div>