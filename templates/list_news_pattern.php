
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/index.css">
  <title>Document</title>
</head>
<body>
  
<header><h1>NEWS</h1></header>
<div class="news">
<?php
            foreach($newsList as $newList){
    ?>
    <li>
      <a href="news/search/<?=$newList[0]?>"style="color: black; text-decoration: none; display: block">
        <p><?= $newList[1]?></p>
        <p><?=$newList[4]?></p>
        <p><?= $newList[2]?></p>
        <div class="gradient"></div>
      </a>
    </li>
    <?php
            }
?>
  </ul>
</div>

</body>
</html>