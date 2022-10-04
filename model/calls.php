<?php

include_once('core/db.php');



function getCalls(){
    $sql = "SELECT * FROM callTracker";
    $query = dbQuery($sql);
    $calls = $query->fetchAll();
    return $calls;
}
function getOneCallbyId(int $id): array{
    echo 'hello from func';
    $sql= "SELECT * FROM callTracker WHERE call_id=:call_id"; 
    $query = dbQuery($sql, ['call_id' => $id]);
    return $query->fetch();


}
function addCall($params){
    $sql = "INSERT INTO callTracker (phone, dt_call, duration) VALUES (:phone, :dt_call, :duration)";
    $query = dbQuery($sql, $params);
    return true;
}