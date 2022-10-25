<?php
    include_once('init.php');

    $cname = $_GET['page']??'index';
    $path = "controller/$cname.php";
    $pageTitle = "error 404";
    $pageContent = "";

    if (checkControllerName($cname) && file_exists($path)){
        include_once($path);  
        
    }
    else {
        header('HTTP/1.1 404 Not Found');
        $pageContent = renderTemplate('errors/v-404');
        
    }
    $html = renderTemplate('base/v_main',
        [
            'title' => $pageTitle,
            'content' => $pageContent
        ]
        );
    echo $html;
