<?php
 
    $calls = getCalls();  
    $pageTitle = "All calls";
    $pageH1 = "All calls";
    $pageContent = renderTemplate('messages/v-calls', ['calls'=>$calls]);
?>