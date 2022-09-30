<?php
    include_once('model/calls.php');
        
    $calls = getCalls();  
    
    include('view/v-index.php');
?>