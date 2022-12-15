<?php 
spl_autoload_register(function($ClassName){
   require '../../classes/'.$ClassName.'.php';
});
$uri =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($uri, '/'));
$bd = new bd;
$bd->delete($segments[4]);
?>