<?php

function authGetUser($token) {
    $user = null;
    if (!is_null($token)) {
        $session = getSession($token);
        if (isset($session)){
            $user = getUserById($session['id_user']);
        }
        if (is_null($user)){
            unset($_SESSION['token']);
            setcookie('token', '', time() - 1, BASE_URL);
        }
    }  
    return $user;  
}

function logOutUser() {
    unset($_SESSION['token']);
    setcookie('token', '', time() - 1, BASE_URL);
}