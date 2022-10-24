<?php
include_once('model/calls.php');
include_once('core/arr.php');
include_once('core/system.php');

$strId = $_GET['id'];
$id = (int) $strId;
$oneCall = getOneCallbyId($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    var_dump($_POST);

    $del_id = extractFields($_POST, ['del_id']);
    delCall($del_id);
    header('Location:index.php');
}

if ($oneCall !== false) {
    $pageTitle = $oneCall['phone'];
    $left = renderTemplate('messages/v_call_left', ['call_id' => $oneCall['call_id']]);
    $content = renderTemplate('messages/v_call', $oneCall);
    $pageContent = renderTemplate('base/v_con2col', [
        'left'=>$left, 'content'=>$content
    ]);
} else {
    header('HTTP/1.1 404 Not Found');
    $pageTitle = 'error 404';
    $pageContent = renderTemplate('errors/v-404');
}




 