<?php
include_once('model/calls.php');
include_once('core/arr.php');

$strId = $_GET['id'];
$id = (int) $strId;
echo 'hello from call page'.' id= '. $id;
$oneCall = getOneCallbyId($id);
print_r($oneCall);

include('view/v_call.php'); 