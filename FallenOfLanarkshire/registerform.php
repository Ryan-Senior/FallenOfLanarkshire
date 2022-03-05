<?php 

include 'connaddress.php';
include("login.php");

//Checks to make sure a submit button has been activated





    $username='';
    $email='';    
    $password='';
    $hash='';


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    //put data entered into each form field into a php variable
    
    $username= mysqli_real_escape_string($conn, $_POST['username']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $password= mysqli_real_escape_string($conn, $_POST['password']); 
    $hash=password_hash($password, PASSWORD_DEFAULT);
    
    //SQL to insert the data into the friends table
    $sql="INSERT INTO registeredusers (username, email, password) VALUES ('$username','$email','$hash')";
    $query = mysqli_query($conn,$sql);
    
//Returns an error message if the SQL did not work
if($query)
{
    
    
    echo "New user added";
    
    $_SESSION['registered'] = 'YES';
    $_SESSION['user'] = htmlspecialchars($username);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>
