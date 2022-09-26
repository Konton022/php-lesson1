<?php
function dbConnect(){
    $db = new PDO('mysql:host=localhost;dbname=mts_test_task', 'root', '');
    $db->exec('SET NAMES UTF8');
    return $db;
}

function dbQuery($sql, $params=[]){
    $db = dbConnect();
    $query = $db->prepare($sql);
    $query->execute($params);
    return $query;
}
