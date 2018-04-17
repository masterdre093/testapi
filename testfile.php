<?php
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Headers: Origin, X-Request-With"); 
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
header('Content-Type: application/json');

$username = null;
$password = null;

if (isset($_SERVER['PHP_AUTH_USER'])) {
    $username = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];
    
    $ret = [
        'user' => $username,
        'pass' => $password,
    ];
    
    print json_encode($ret);
} 

//references
//required headers -  https://stackoverflow.com/questions/8719276/cors-with-php-headers/9866124
//athorization header - https://evertpot.com/223/
?>

