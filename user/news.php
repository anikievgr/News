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
// echo "<pre>";
// var_dump($newsList);
// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
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
</body>
</html>