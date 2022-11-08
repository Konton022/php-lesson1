<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $errFlag = true;
        $login = trim($_POST['login']);
        $password = trim($_POST['password']);
        $remenber = isset($_POST['remember']);
        
        $user = getUser($login);
        var_dump($user);
        if(isset($user) && password_verify($password == $user['password'])){
            $errFlag = false;
            echo 'login good'
        }) else {

        }

    } else {
        $errFlag = false;
    }   
    
    $pageTitle = 'Login';
    $pageH1 = $pageTitle.' please!';
    $pageContent = renderTemplate('auth/v_login', ['errFlag' => $errFlag] );