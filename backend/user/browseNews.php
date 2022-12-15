<?php 
$uri =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($uri, '/'));
$bd = new bd;
$bd->readNews($segments[4]);
$NEWS = $bd->news;
require("templates/user-templates/browseNews_pattern.php")
?>
