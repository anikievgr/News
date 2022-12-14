<?php 
spl_autoload_register(function($ClassName){
   require '../classes/'.$ClassName.'.php';
});
$inputTemplates = new input_templates;
ob_start();
?>
    <div class="chek-news">
      <div class="text">
        <p><?=$NEWS[1]?></p>
        <p><?=$NEWS[4]?></p>
      </div>
      <p><?=$NEWS[2]?></p>
    </div>

<?php
$html = ob_get_flush();
ob_end_clean();
$inputTemplates->output_html($html);
?>