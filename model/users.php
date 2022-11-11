<?php
function getUserByLogin($login){
    $sql= "SELECT * FROM users WHERE login=:login"; 
    $query = dbQuery($sql, ['login' => $login]);
    $user = $query->fetch();
    if (isset($user)){
        return $user;
    }
    return null;
};

function getUserById($id){
    $sql= "SELECT login, id_user, email, name FROM users WHERE id_user=:id"; 
    $query = dbQuery($sql, ['id' => $id]);
    $user = $query->fetch();
    if (isset($user)){
        return $user;
    }
    return null;
};

function registerUser($params) {
    $sql = "INSERT INTO users (login, password, email, name) VALUES (:login, :password, :email, :name)";
    $query = dbQuery($sql, $params);
    return true;
}

?>