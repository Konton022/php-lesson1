<?php

$strId = URL_PARAMS[1];
$id = (int) $strId;
$oneCall = getOneCallbyId($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $del_id = $_POST['del_id'];
    $delIndex = delCall($del_id);
    
    if (isset($del_id)) {
        header('Location:'.BASE_URL);
    }  else {
        alarm('somethink went wrong');
    }    
}
    


if ($oneCall !== false) {
    $pageTitle = $oneCall['phone'];
    $pageH1 = "phoned from {$oneCall['phone']}";
    $pageTemplate = 'v_main2c';
    $pageLeft = renderTemplate('messages/v_call_left', ['call_id' => $oneCall['call_id']]);
    $pageContent = renderTemplate('messages/v_call', $oneCall);
} else {
    header('HTTP/1.1 404 Not Found');
    $pageTitle = 'error 404';
    $pageContent = renderTemplate('errors/v-404');
}




 