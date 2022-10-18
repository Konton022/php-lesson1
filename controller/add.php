<?php
    include_once('model/calls.php');
    include_once('core/arr.php');
    include_once('core/system.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fields = extractFields($_POST, ['phone']);
    $params = [
        'phone'=> $fields['phone'],
        'duration' => rand(1, 1000),
        'dt_call' => date("Y-m-d H:i:s")
    ];
    $insert = addCall($params);
    header('Location:index.php');
}

$pageTitle = "add new call";
$pageContent = renderTemplate('messages/v-add');