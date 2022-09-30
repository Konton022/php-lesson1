<?php

include_once('core/db.php');



function getCalls(){
    $sql = "SELECT * FROM callTracker";
    $query = dbQuery($sql);
    $calls = $query->fetchAll();
    return $calls;
}
function getCallbyId($id){
    echo " call_id - $id";
    $sql= "SELECT * FROM callTracker WHERE call_id = :call_id";
    $params['call_id'] = $id; 
    $query = dbQuery($sql, $params);
    $call = $query->fetchAll();
    return $call;


}
function addCall($params){
    $sql = "INSERT INTO callTracker (phone, dt_call, duration) VALUES (:phone, :dt_call, :duration)";
    $query = dbQuery($sql, $params);
    return true;
}