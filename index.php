<?php
    session_start();
    // var_dump($_SESSION);
    include_once('init.php');
   
    $token = $_SESSION['token'] ?? $_COOKIE['token'] ?? null;
    $user = authGetUser($token);
    
    $url = $_GET['querysystemurl'] ?? '';
    $routes = include('routes.php');
    $resRouter = routeUrl($url, $routes);
    
    $cname = $resRouter['controller'] ?? 'index';
    
    define('URL_PARAMS', $resRouter['params']);
    $path = "controller/$cname.php";
    
    $pageTitle = "error 404";
    $pageContent = "";
    $pageTemplate = 'v_main';
    $pageLeft = '';
    $pageH1 = 'error 404';

    if (checkControllerName($cname) && file_exists($path)){
        include_once($path);  
        
    }
    else {
        // header('HTTP/1.1 404 Not Found');
        // $pageContent = renderTemplate('errors/v-404');
        
    }
    $html = renderTemplate("base/$pageTemplate",
        [
            'title' => $pageTitle,
            'content' => $pageContent,
            'pageLeft' => $pageLeft,
            'pageH1' => $pageH1,
            'user' => $user
        ]
        );
    echo $html;
