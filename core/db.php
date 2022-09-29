<?php
function dbConnect(){
    static $db;
    if($db === null) {
        $db = new PDO('mysql:host=localhost;dbname=mts_test_task', 'root', '',
        [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]
        );
        $db->exec('SET NAMES UTF8');
    }
    return $db;
}

function dbQuery($sql, $params=[]){
    $db = dbConnect();
    $query = $db->prepare($sql);
    $query->execute($params);
    return $query;
}
