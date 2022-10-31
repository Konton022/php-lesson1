<?php 
 function checkControllerName(string $cname) :bool {
    return !!preg_match('/^[a-z0-9]+\/[a-z0-9_]+$/', $cname);
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

 function routeUrl(string $url, array $routes) : array {
  $res = [
    'controller' => 'errors/e404',
    'params' => []
  ];

  foreach ($routes as $route) {
    if (preg_match($route['test'], $url)){
      $res['controller'] = $route['controller'];
      break;
    }
  }

    
  return $res;
 }