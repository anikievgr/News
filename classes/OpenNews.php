<?php 
class OpenNews {
    public $employees;
        function __construct($employees)
    {
        
          if($employees == ""){
        require 'backend/user/news.php';
        }elseif($employees == "search"){
            require 'backend/user/browseNews.php';
        }
    }

}
?>