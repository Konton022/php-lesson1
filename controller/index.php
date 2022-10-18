<?php
    include_once('model/calls.php');   
    $calls = getCalls();  
    $pageTitle = "All calls";
    $pageContent = renderTemplate('messages/v-calls', ['calls'=>$calls]);
?>