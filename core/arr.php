<?php

function extractFields(array $target, array $values):array{
    $res = [];
    foreach($values as $value){
        $res[$value] = trim($target[$value]);
    }
    return $res;
}