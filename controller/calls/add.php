<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fields = extractFields($_POST, ['phone']);
    $params = [
        'phone'=> $fields['phone'],
        'duration' => rand(1, 1000),
        'dt_call' => date("Y-m-d H:i:s")
    ];
    $insert = addCall($params);
    $_SESSION['call.added'] = true;
    header('Location:'.BASE_URL);
}

$pageTitle = "add new call";
$pageH1 = "add new call";
$pageContent = renderTemplate('messages/v-add');