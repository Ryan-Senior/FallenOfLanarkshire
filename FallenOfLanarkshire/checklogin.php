<?php
include "connaddress.php";

//Output buffering start - not always necessary,
//but can prevent errors when working with sessions

ob_start();
session_start();

if ($_SERVER['REQUEST_METHOD'] =='POST') {
    
//The mysql_real_escape_string() function escapes special characters
//in a string for use in an SQL statement
//The following chracters are affected: \x00, \n, \r, \, ', ", \x1a
//This function is used to prevent database attack*/

$email = mysqli_real_escape_string($conn, $_POST['email']);
$Password = mysqli_real_escape_string($conn, $_POST['Password']);
    
$query="SELECT * FROM registeredusers WHERE email='$email'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
    
// Password retrieved from the database (hashed)
$dbPassword = $row['password'];
   
// If password is correct, set Session to Username
// Allows the FirstName to displayed throughout the session
    
    if(password_verify($Password, $dbPassword)) {
        $_SESSION['userid'] = $row['userid'];
        header("location:loginsuccess.php");
        
    }else {
        header("location:login.php");

    }
}

ob_end_flush();
?>
