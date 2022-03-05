<?php include "connaddress.php";

$id=( isset($_GET["id"]) && !empty($_GET["id"]) ? $_GET["id"] : "");

// Find the matching record based on the ID passed on the URL
$query="SELECT * FROM vinyls WHERE userid = $id";
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fallen of Lanarkshire - Add Record</title>
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

    <div class="container bg-light" id=" container ">
        <div class="row d-flex justify-content-center ">

            <div class="col-lg-12 col-md-12 col-sm-12 m-4 p-4 ">
                <h2 class="feature-title text-center ">Add Record</h2>

            </div>
            <div style="background-color:#659ed3" class=" class-help col-lg-7 col-md-8 col-sm-12 mb-5 p-4 shadow rounded">




                <form action="addnewCode.php" method="post">
                    <!-- moves user enter information to addnewcode.php -->



                    <input class="form-control rounded mb-2" type="text" name="surname" placeholder="Surname ">
                    <input class="form-control rounded mb-2" type="text" name="forenames" placeholder="Forename(s) ">
                    <input class="form-control rounded mb-2" type="text" name="serviceno" placeholder="Service Number ">
                    <input class="form-control rounded mb-2" type="text" name="rank" placeholder="Rank ">
                    <input class="form-control rounded mb-2" type="text" name="regiment" placeholder="Regiment ">
                    <input class="form-control rounded mb-2" type="text" name="recorded01" placeholder="Recorded Location 1 ">
                    <input class="form-control rounded mb-2" type="text" name="recorded02" placeholder="Recorded Location 2 ">
                    <input class="form-control rounded mb-2" type="text" name="recorded03" placeholder="Recorded Location 3 ">
                    <input class="form-control rounded mb-2" type="text" name="recorded04" placeholder="Recorded Location 4 ">
                    <input class="form-control rounded mb-2" type="text" name="recorded05" placeholder="Recorded Location 5 ">
                    <input class="form-control rounded mb-2" type="text" name="recorded06" placeholder="Recorded Location 6 ">
                    <input class="form-control rounded mb-2" type="text" name="town" placeholder="Town ">
                    <input class="form-control rounded mb-2" type="text" name="location" placeholder="Location ">
                    <input class="form-control rounded mb-2" type="text" name="war" placeholder="War ">
                    <input class="form-control rounded mb-2" type="text" name="type" placeholder="Type of Memorial ">
                    <input class="form-control rounded mb-2" type="text" name="died" placeholder="Died ">
                    <input class="form-control rounded mb-2" type="text" name="otherinfo" placeholder="Other Information ">
                    <input class="form-control rounded mb-2" type="date" name="dateadded">
                    <input type="hidden" name="userid " value="<?php echo " $id ";?>">


                    <input class="btn btn-secondary input-group-addon rounded mb-2" type="submit" value="Add Record" name="addrecord">



                </form>
            </div>

        </div>
    </div>
    <?php include("footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="main.js"></script>

</body>

</html>
