<?php 
class OpenAdmin{
    public $open;
    function __construct($open)
    {
   
    if($open == ""){
            require 'backend/adminPanel/choiceAdminPanel.php';
        }elseif($open == "add"){
             require "templates/admin_templates/add_news_pattern.php";
        }elseif($open == "delete"){
                require 'backend/adminPanel/deleteNews.php';
        }elseif($open == "deleteNews"){
            require 'backend/adminPanel/delete.php';
        }elseif($open == "uppdate"){
                require 'backend/adminPanel/uppdate_list_News.php';
        }
        elseif($open == "uppdateNews"){
                require 'backend/adminPanel/uppdate_form.php';
        }
    }
}
?>