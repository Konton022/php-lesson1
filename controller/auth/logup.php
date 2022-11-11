<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
    $errFlag = true;
    $fields = extractFields($_POST, ['login', 'password', 'email', 'name']);
    
    extract($fields);
    if ($login != '' && $password != '' && $email != '' && $name != '') {
        $errFlag = false;
            $passHash = password_hash($password, PASSWORD_BCRYPT);
            $params = [
                'login' => $login,
                'password' => $passHash,
                'email' => $email,
                'name' => $name,
            ];
            registerUser($params);
            header('Location:'.BASE_URL);
    }  
     else {
        echo 'write all fields!';
    }        


} else {
    $errFlag = false;
}   

$pageTitle = 'Register';
$pageH1 = $pageTitle.' please!';
$pageContent = renderTemplate('auth/v_logup', ['errFlag' => $errFlag] );