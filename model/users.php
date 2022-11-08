<?php
function getUser($login){
    $sql= "SELECT * FROM users WHERE login=:login"; 
    $query = dbQuery($sql, ['login' => $login]);
    $user = $query->fetch();
    if (isset($user)){
        return $user;
    }
    return null;
};
?>