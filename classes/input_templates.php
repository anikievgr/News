<?php
class input_templates
{
    // function __construct($name_parents, $pattern)
    // {
    //      require "array.php";
    //     $templatesArray = $array[$name_parents]['templates'][$pattern];
    //      echo '<pre>';
    //      var_dump($templatesArray);
    //      echo '</pre>';
    //     require 'templates/'.$templatesArray;
    // }
    function output_html($html)
    {
        $header= file_get_contents("pattern.html");

        $content = str_replace('{content}', $html, $header );
        echo $content;
    }
}
?>