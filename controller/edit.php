<?php
$editMessage = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $fields = extractFields($_POST, ['phone']);
    // $params = [
    //     'phone'=> $fields['phone'],
    //     'duration' => rand(1, 1000),
    //     'dt_call' => date("Y-m-d H:i:s")
    // ];
    // $insert = addCall($params);
    // header('Location:index.php');
} else {
	$id = $_GET['id'];
	$editMessage = getOneCallbyId($id);
	var_dump($editMessage);
}

$pageTitle = "edit call";
$pageH1 = "Edit call";
$pageContent = renderTemplate('messages/v_edit', ['phone' => $editMessage['phone']]);