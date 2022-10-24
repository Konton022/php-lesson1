<?php

$strId = $_GET['id'];
$id = (int) $strId;
$oneCall = getOneCallbyId($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $del_id = $_POST['del_id'];
    $delIndex = delCall($del_id);
    
    if ($delIndex) {
        header('Location:index.php');
    }  else {
        alarm('somethink went wrong');
    }    
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




 