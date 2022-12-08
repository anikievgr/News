<?php 
spl_autoload_register(function($ClassName){
   require '../classes/'.$ClassName.'.php';
});
$uri =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($uri, '/'));
$bd = new bd;
$bd->readNews($segments[4]);
$news = $bd->news;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/index.css">
</head>
<body>
    <h1>Обновить</h1>
    <form class="formAddNews" action="../../../adminPanel/uppdate.php?id=<?=$segments[4]?>" method="post">
    <input type="text" name="newsTitle" value="<?=$news[1]?>">
    <textarea name="newsText" id="" cols="30" rows="10">
     <?=$news[2]?>
</textarea>
   <button type="submit">Загрузить</button>
</form>
</body>
</html>