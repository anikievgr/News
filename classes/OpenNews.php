<?php 
class OpenNews {
    public $employees;
        function __construct($employees)
    {
        
          if($employees == ""){
        require 'user/news.php';
        }elseif($employees == "search"){
            require 'user/browseNews.php';
        }
    }

}
?>