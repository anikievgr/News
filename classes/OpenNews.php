<?php 
class OpenNews{
    public function OpenNewsList($search){
        if($search == ""){
        require 'user/news.php';
        }elseif($search == "search"){
            require 'user/browseNews.php';
        }
    }
}
?>