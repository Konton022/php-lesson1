<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
    $errFlag = true;
    $fields = extractFields($_POST, ['login', 'password', 'email', 'name']);
    // var_dump($fields);
    extract($fields);
    if ($login != '' && $password != '' && $email != '' && $name != '') {
        $errFlag = false;
            $passHash = password_hash($password, PASSWORD_BCRYPT);
            $params = [
                'login' => $login,
                'password' => $passHash,
                'email' => $email,
                'name' => $name
            ];
            // registerUser($params);
            // header('Location:'.BASE_URL);
            echo '<pre>';
            var_dump($params);
            echo '</pre>';
    }  
     else {
        echo 'write all fields!';
    }        
            


    //         if(isset($user) && password_verify($password, $user['password'])){
    //         $errFlag = false;
    //         $token = substr(bin2hex(random_bytes(128)), 0, 128);
    //         addSession($user['id_user'], $token);
    //         $_SESSION['token'] = $token;
    //         $remenber ? setcookie('token', $token, time() + 3600*27*7, BASE_URL) : null;
    //         header('Location:'.BASE_URL);
    //         exit();
    //     } else {
    //         echo 'write all fields!';
    //     }
    // }
    

} else {
    $errFlag = false;
}   

$pageTitle = 'Register';
$pageH1 = $pageTitle.' please!';
$pageContent = renderTemplate('auth/v_logup', ['errFlag' => $errFlag] );