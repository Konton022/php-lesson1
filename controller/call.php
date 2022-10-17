<?php
include_once('model/calls.php');
include_once('core/arr.php');
include_once('core/system.php');

$strId = $_GET['id'];
$id = (int) $strId;
$oneCall = getOneCallbyId($id);

if ($oneCall !== false) {
    $pageTitle = $oneCall['phone'];
    $pageContent = renderTemplate('v_call', $oneCall);
} else {
    header('HTTP/1.1 404 Not Found');
    $pageTitle = 'error 404';
    $pageContent = renderTemplate('v-404');
}




 