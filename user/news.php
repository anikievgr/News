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
?>

    <header><h1>NEWS</h1></header>
    <div class="news">
        <ul>
            <?
            foreach($newsList as $newList){
                ?>
                <li>
                    <p><?= $newList[1]?></p>
                    <p><?=$newList[4]?></p>
                    <p><?= $newList[2]?></p>
                    <div class="gradient"></div>
                </li>
              <?
            }
            ?>
        </ul>
    </div>
