<?php
	$dbhost = "localhost";
	$dbuser= "root";
	$dbpass = "handong";
	$dbname = "251076600assign2db";
	$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname); 

	if (mysqli_connect_errno()) {
    	die("Database connection failed :" . 
    			mysqli_connect_error() . " (" . 
    			mysqli_connect_errno() . ")" ); 
    } //end of if statement
?>
