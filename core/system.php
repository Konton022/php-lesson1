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

 function parseUrl($url){
  $params = explode('/', $url);
  $cnt = count($params);
  if ($params[$cnt - 1] == ''){
    unset($params[$cnt - 1]);
  }
  return $params;
 }