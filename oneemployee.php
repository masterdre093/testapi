<?php
/*$type = $request->type;*/
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Headers: Origin, X-Request-With"); 
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
header('Content-Type: application/json');
$postdata = json_decode(file_get_contents("php://input"));

$employeeId = $postdata->id;
$employeeId = filter_var($employeeId, FILTER_SANITIZE_STRING);
    
//CONNECT TO THE DATABASE
include("connection.php");
$query = "SELECT * FROM employee WHERE deleted = 'FALSE' AND employeeId =  $employeeId ";

$sth = mysqli_query($mysqli, $query);
$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    //print json_encode($r);
    $rows[] = $r;
}
print json_encode($rows);

 //references 
/*
create object results -http://stackoverflow.com/questions/383631/json-encode-mysql-results
add object to array - https://stackoverflow.com/questions/1138359/how-can-i-add-key-value-pairs-to-an-array
*/
?>