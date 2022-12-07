<?php
spl_autoload_register(function($ClassName){
   require '../classes/'.$ClassName.'.php';
});
$bd = new bd;
$newsList = $bd->itemsBd;
?>

    <header><h1>NEWS</h1></header>
    <div class="news">
        <ul>
            <?
            foreach($newsList as $newList){
                ?>
                <li >
                <a href="news/search/<?=$newList[0]?>" style="color: black;   text-decoration: none; display:block;">
                    <p><?= $newList[1]?></p>
                    <p><?=$newList[4]?></p>
                    <p><?= $newList[2]?></p>
                    <div class="gradient"></div>
                    </a>
                </li>
              <?
            }
            ?>
        </ul>
    </div>
