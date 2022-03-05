<?php
session_start();
ob_start();

//Login Check - If the session is not registered,
//redirect back to main login page.
if (!isset($_SESSION['userid'])) {
    header('location:register.php');
    
}
ob_end_flush();
?>

    <?php include "connaddress.php";
$help=$_SESSION['userid'];
$query ="SELECT firstname FROM registeredusers WHERE userid = '$help'";
$result=mysqli_query($conn, $query);


?>

    <!DOCTYPE html>

    <html lang="en">


    <head>
        <title>Fallen of Lanarkshire - Soldier Information</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name=”description” content="Fallen of Lanarkshire, Reflection of our ancestors">
        <meta name=”keywords” content="fallen,lanarkshire,ww1,ww2,soldiers,scotland">
        <meta name=”robots” content="noindex">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="manifest" href="images/site.webmanifest">
    </head>

    <body>

        <?php include "header.php";?>
        <div class="container">
            <div class="row  d-flex justify-content-center features">

                <div class="col-lg-3 col-md-3 col-sm-12 bg-light m-2 pt-2 shadow rounded text-center">

                    <img src="images/records.jpg" class="img-fluid" alt="new record">
                    <a href="addnew.php?id=<?=$_SESSION['userid']?>">
                        <h3 class="feature-title">Add New Records</h3>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 bg-light m-2 pt-2 shadow rounded text-center">

                    <img src="images/records.jpg" class="img-fluid" alt="update">
                    <a href="updatelist.php?id=<?=$_SESSION['userid']?>">
                        <h3 class="feature-title">Update and Delete Records</h3>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 bg-light m-2 pt-2 shadow rounded text-center">

                    <img src="images/records.jpg" class="img-fluid" alt="update">
                    <a href="register.php">
                        <h3 class="feature-title">Register New User</h3>
                    </a>
                </div>

                <div class="col-lg-3 col-md- col-sm-12 bg-light m-2 pt-2 shadow rounded text-center">

                    <img src="images/exit.jpg" class="img-fluid" alt="logout">
                    <a href="Logout.php">
                        <h3 class="feature-title">Logout</h3><br>


                    </a>

                </div>

            </div>
        </div>




        <?php include("footer.php"); ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="main.js"></script>

    </body>

    </html>
