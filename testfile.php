<?php
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Headers: Origin, X-Request-With"); 
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
header('Content-Type: application/json');

$token = null;
$headers = apache_request_headers();
if(isset($headers['authorization'])){
    
    $matches = array();
        preg_match('/Token token="(.*)"/', $headers['authorization'], $matches);
        if(isset($matches[1])){
            $token = $matches[1];
        }
} 
/*$ret = [
        'result' => $_SERVER['REQUEST_METHOD'],
    ];*/
    print json_encode($headers);

//references
//required headers -  https://stackoverflow.com/questions/8719276/cors-with-php-headers/9866124
//athorization header - https://stackoverflow.com/questions/2902621/fetching-custom-authorization-header-from-incoming-php-request
?>

