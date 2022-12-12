<?php 
class OpenAdmin{
    public $open;
    function __construct($open)
    {
   
    if($open == ""){
            require 'adminPanel/choiceAdminPanel.php';
        }elseif($open == "add"){
             require "templates/add_news_templates.html";
        }elseif($open == "delete"){
                require 'adminPanel/deleteNews.php';
        }elseif($open == "deleteNews"){
            require 'adminPanel/delete.php';
        }elseif($open == "uppdate"){
                require 'adminPanel/uppdateNews.php';
        }
        elseif($open == "uppdateNews"){
                require 'adminPanel/uppdateAdd.php';
        }
    }
}
?>