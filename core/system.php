<?php 
 function checkControllerName(string $cname) :bool {
    return !!preg_match('/^[a-z0-9_]+$/', $cname);
 }