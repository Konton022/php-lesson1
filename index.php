<?php
    include_once(__DIR__.'/model/calls.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $params = [
            'phone' => $_POST['phone'],
            'duration' => rand(1, 1000),
            'dt_call' => date("Y-m-d H:i:s")
        ];
        $insert = addCall($params);
        header('Location:index.php');
    }
    print_r($_GET);
    
    $calls = getCalls();  
    
    include(__DIR__.'/view/v-index.php');
?>