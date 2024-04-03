<?php
require_once(dirname(dirname(__FILE__)) . '/LocalSettings.php');

ini_set('display_errors', 1); 
error_reporting(E_ALL);

// Establish database connection
$con = mysqli_connect($host, $dbuser, $dbpass, $dbname);

// Check if connection was successful
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

// Now you don't need mysqli_select_db() as the database was already specified in mysqli_connect()

// You can remove the following line
// @mysqli_select_db($con, $dbname) or die("Unable to connect to the database: $dbname");

// Check if the connection is valid
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

?>
