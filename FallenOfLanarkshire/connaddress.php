<?php
//Variables that hold connection information
$server = "localhost";
$username = "root";
$password = "";

//Change the database name as required
$dbname = "fallen";

//Create connection
$conn = mysqli_connect($server, $username, $password, $dbname);

//Check connection
if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());}
?>
