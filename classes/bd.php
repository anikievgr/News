<?php
class bd
{
    public $bd;
    public $itemsBd;
    public $news;    
 function __construct(){
   $connect =  mysqli_connect('localhost','root','root','news');
   if(!$connect){
            echo "erore";
        } else {
            $this->bd = $connect;
              $readBD = mysqli_query($this->bd, "SELECT * FROM `newlist`");
              $readBD = mysqli_fetch_all($readBD);
            foreach($readBD as $readBD){
              $this->itemsBd[] = $readBD; 
        }
        }
}
  
    public function add($newstitle, $newsText, $date)
    {
          mysqli_query($this->bd, "INSERT INTO `newlist` (`id`, `newsTitle`, `newsText`, `newsIMG`, `newsDate`) VALUES (NULL, '$newstitle', '$newsText', 'NULL', '$date');");
    }
    public function delete($id)
    {
         mysqli_query($this->bd, "DELETE FROM `newlist` WHERE `newlist`.`id` = $id");
    }
    public function readNews($id){
       $news = mysqli_query($this->bd, "SELECT * FROM `newlist` WHERE id = $id;");
       $news = mysqli_fetch_all($news);
       foreach($news as $news){
       $this->news = $news;
       }
    }
    public function update($newstitle, $newsText, $date, $id)
    {
        mysqli_query($this->bd, "UPDATE `newlist` SET `newsTitle` = '$newstitle', `newsText` = '$newsText', `newsDate` = '$date' WHERE `newlist`.`id` = '$id';");
    }
}
?>