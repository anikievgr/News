
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../../css/index.css" />
  </head>
  <body>
<header><h1>Обновить</h1></header>
    <div class="news">
        <ul>
            <?
            foreach($newsList as $newList){
                ?>
                <li >
                <a href="uppdateNews/<?=$newList[0]?>" style="color: black;   text-decoration: none; display:block;">
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
    
</body>
</html>