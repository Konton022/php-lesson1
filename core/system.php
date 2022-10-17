<?php 
 function checkControllerName(string $cname) :bool {
    return !!preg_match('/^[a-z0-9_]+$/', $cname);
 }

 function renderTemplate(string $path, array $vars = []) : string {
   $fullTemplatePath = "view/$path.php";
   extract($vars);
   ob_start();
   include($fullTemplatePath);
   return ob_get_clean();
 }