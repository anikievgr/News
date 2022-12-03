<?php 
class OpenAdmin{
    public $open;
    function __construct($open)
    {
    if($open == ""){
            require 'adminPanel/choiceAdminPanel.php';
        }elseif($open == "add"){
             require "adminPanel/addNews.php";
        }elseif($open == "delete"){
                require 'adminPanel/deleteNews.php';
        }elseif($open == "deleteNews"){
            require 'adminPanel/delete.php';
        }
    }
    // public function OpenAdminPanel($open){
    //     if($open == ""){
    //         require 'adminPanel/choiceAdminPanel.php';
    //     }elseif($open == "add"){
    //          require "adminPanel/addNews.php";
    //     }elseif($open == "delete"){
    //             require 'adminPanel/deleteNews.php';
    //     }elseif($open == "deleteNews"){
    //         require 'adminPanel/delete.php';
    //     }
    // }
}
?>