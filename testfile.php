<?php
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Headers: Origin, X-Request-With"); 
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
header('Content-Type: application/json');
$ret = [
        'result' => $_SERVER['REQUEST_METHOD'],
    ];
    print json_encode($ret);

//references
//required headers -  https://stackoverflow.com/questions/8719276/cors-with-php-headers/9866124
?>

