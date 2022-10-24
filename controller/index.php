<?php
 
    $calls = getCalls();  
    $pageTitle = "All calls";
    $pageContent = renderTemplate('messages/v-calls', ['calls'=>$calls]);
?>