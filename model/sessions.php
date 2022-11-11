<?php

function addSession ($id_user, $token) {
    $params = [
        'uid' => $id_user,
        'token' => $token
    ];

    $sql = "INSERT INTO sessions (id_user, token) VALUES (:uid, :token)";
    $query = dbQuery($sql, $params);
    return true;
}

function getSession($token){
    $sql= "SELECT * FROM sessions WHERE token=:token"; 
    $query = dbQuery($sql, ['token' => $token]);
    return $query->fetch();
}