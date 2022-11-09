<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $errFlag = true;
        $login = trim($_POST['login']);
        $password = trim($_POST['password']);
        $remenber = isset($_POST['remember']);
        
        if ($login != '' && $password != '') {
            
            $user = getUserByLogin($login);

            if(isset($user) && password_verify($password, $user['password'])){
                $errFlag = false;
                $token = substr(bin2hex(random_bytes(128)), 0, 128);
                addSession($user['id_user'], $token);
                $_SESSION['token'] = $token;
                $remenber ? setcookie('token', $token, time() + 3600*27*7, BASE_URL) : null;
                header('Location:'.BASE_URL);
                exit();
            } else {
                echo 'wrong login';
            }
        }
        

    } else {
        $errFlag = false;
    }   
    
    $pageTitle = 'Login';
    $pageH1 = $pageTitle.' please!';
    $pageContent = renderTemplate('auth/v_login', ['errFlag' => $errFlag] );