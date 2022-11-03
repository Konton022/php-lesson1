<?php
    
    $calls = getCalls();
    $callAdded = false;
    
    if (isset($_SESSION['call.added'])){
        $callAdded = true;
        unset($_SESSION['call.added']); 
    }
    $pageTitle = "All calls";
    $pageH1 = "All calls";
    $pageContent = renderTemplate('messages/v-calls', ['calls'=>$calls, 'callAdded'=>$callAdded]);
?>