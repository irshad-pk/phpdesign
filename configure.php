<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "design";

/* Attempt to connect to MySQL database */

 $db = new mysqli($servername, $username, $password,$dbname);
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
