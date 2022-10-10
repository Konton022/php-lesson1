<?php
include_once('model/calls.php');
include_once('core/arr.php');
include_once('core/system.php');

$strId = $_GET['id'];
$id = (int) $strId;
//echo 'hello from call page'.' id= '. $id;
$oneCall = getOneCallbyId($id);

renderTemplate('v_call', $oneCall);

//include('view/v_call.php'); 