<?php

$cname = $_GET['page']??'index';
$path = "controller/$cname.php";

include_once($path);