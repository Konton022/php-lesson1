<?php
$editMessage = [];
$id = URL_PARAMS['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fields = extractFields($_POST, ['edit']);
    $params = [
        'phone'=> $fields['edit'],
        'call_id' => $id,
    ];
    editCall($params);
    header('Location:'.BASE_URL);
} else {

	$editMessage = getOneCallbyId($id);
}

$pageTitle = "edit call";
$pageH1 = "Edit call";
$pageContent = renderTemplate('messages/v_edit', ['phone' => $editMessage['phone']]);