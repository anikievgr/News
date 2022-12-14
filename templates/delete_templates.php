<?php 
spl_autoload_register(function($ClassName){
   require '../classes/'.$ClassName.'.php';
});
$inputTemplates = new input_templates;
ob_start();
?>
<header><h1>Удалить</h1></header>
    <div class="news">
        <ul>
            <?
            foreach($newsList as $newList){
                ?>
                <li >
                <a href="deleteNews/<?=$newList[0]?>" style="color: black;   text-decoration: none; display:block;">
                    <p><?= $newList[1]?></p>
                    <p><?=$newList[4]?></p>
                    <p><?= $newList[2]?></p>
                    <div class="gradient"></div>
                    </a>
                </li>
              <?
            }
            ?>
        </ul>
    </div>
<?php
$html = ob_get_flush();
ob_end_clean();
$inputTemplates->output_html($html);
?>