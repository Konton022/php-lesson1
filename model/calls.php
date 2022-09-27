<?php

include_once(__DIR__.'/db.php');

$sqlSelectCallbyId = "SELECT * FROM callTracker WHERE call_id = :call_id";

function getCalls(){
    $sql = "SELECT * FROM callTracker";
    $query = dbQuery($sql);
    $calls = $query->fetchAll();
    return $calls;
}
function addCall($params){
    $sql = "INSERT INTO callTracker (phone, dt_call, duration) VALUES (:phone, :dt_call, :duration)";
    $query = dbQuery($sql, $params);
    return true;
}