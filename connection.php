<?php
	/**********MYSQL Settings****************/
	$host="localhost";
	$databasename="leavetracker";
	$user="root";
	$pass="";
	/**********MYSQL Settings****************/

	// Create connection
    $mysqli = new mysqli($host, $user, $pass, $databasename);

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
//   echo "Connected successfully";

    /*$mysqli=mysqli_connect($host,$user,$pass); //chsge to mysqli instesd of mysql, getting access denied 
	if($mysqli)
	{
        $db_selected = mysqli_select_db($mysqli, $databasename);
        if (!$db_selected) {
            die ('Can\'t use foo : ' . mysqli_error($mysqli));
        }
	}
	else
	{
	    die('Not connected : ' . mysqli_error($mysqli));
	}
    */
?>
