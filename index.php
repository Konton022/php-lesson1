<?php
include_once('core/system.php');
$cname = $_GET['page']??'index';
$path = "controller/$cname.php";

if (checkControllerName($cname) && file_exists($path)){
    include_once($path);  
}
else {
    header('HTTP/1.1 404 Not Found');
    include('view/v-404.php');
}
