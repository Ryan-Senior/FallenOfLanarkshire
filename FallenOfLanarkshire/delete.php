<?php include "connaddress.php";

$id=( isset($_GET["id"]) && !empty($_GET["id"]) ? $_GET["id"] : "");

// Find the matching record based on the ID passed on the URL
$query="SELECT * FROM soldier WHERE id = $id";
$result=mysqli_query($conn,$query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fallen of Lanarkshire - Delete records</title>
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
        <div class="row  d-flex justify-content-center">


            <?php

            while ($row=mysqli_fetch_array($result)){
                $id=$row['id'];
                $surname=$row['surname'];	
                $forenames=$row['forenames'];	
                $serviceno=$row['serviceno'];
                $rank=$row['rank'];
                $regiment=$row['regiment'];
                $recorded01=$row['recorded01'];
                $recorded02=$row['recorded02'];
                $recorded03=$row['recorded03'];
                $recorded04=$row['recorded04'];
                $recorded05=$row['recorded05'];
                $recorded06=$row['recorded06'];
                $town=$row['town'];
                $location=$row['location'];
                $war=$row['war'];
                $type=$row['type'];
                $died=$row['died'];
                $otherinfo=$row['otherinfo'];
                $dateadded=$row['dateadded'];
                $userid=$row['userid'];
        ?>


                <div class="class-help col-lg-8 col-md-8 col-sm-12 bg-light m-3 p-4 shadow rounded">








                    <form action="deleteCode.php" method="post">
                        <h3 class="feature-title-four">ID: </h3>
                        <p class="d-inline-block"><input type="text" name="id" value="<?php echo " $id ";?>"></p>
                        <h3 class="feature-title-four">Surname: </h3>
                        <p class="d-inline-block"><input type="text" name="surname" value="<?php echo " $surname ";?>"></p>
                        <h3 class="feature-title-four">Forename(s): </h3>
                        <p class="d-inline-block"><input type="text" name="forenames" value="<?php echo " $forenames ";?>"></p>
                        <h3 class="feature-title-four">Service Number: </h3>
                        <p class="d-inline-block"><input type="text" name="serviceno" value="<?php echo " $serviceno ";?>"></p>
                        <h3 class="feature-title-four">Rank: </h3>
                        <p class="d-inline-block"><input type="text" name="rank" value="<?php echo " $rank ";?>"></p>
                        <h3 class="feature-title-four">Regiment: </h3>
                        <p class="d-inline-block"><input type="text" name="regiment" value="<?php echo " $regiment ";?>"></p>
                        <h3 class="feature-title-four">Recorded Location 1: </h3>
                        <p class="d-inline-block"><input type="text" name="recorded01" value="<?php echo " $recorded01 ";?>"></p>
                        <h3 class="feature-title-four">Recorded Location 2: </h3>
                        <p class="d-inline-block"><input type="text" name="recorded02" value="<?php echo " $recorded02 ";?>"></p>
                        <h3 class="feature-title-four">Recorded Location 3: </h3>
                        <p class="d-inline-block"><input type="text" name="recorded03" value="<?php echo " $recorded03 ";?>"></p>
                        <h3 class="feature-title-four">Recorded Location 4: </h3>
                        <p class="d-inline-block"><input type="text" name="recorded04" value="<?php echo " $recorded04 ";?>"></p>
                        <h3 class="feature-title-four">Recorded Location 5: </h3>
                        <p class="d-inline-block"><input type="text" name="recorded05" value="<?php echo " $recorded05 ";?>"></p>
                        <h3 class="feature-title-four">Recorded Location 6: </h3>
                        <p class="d-inline-block"><input type="text" name="recorded06" value="<?php echo " $recorded06 ";?>"></p>
                        <h3 class="feature-title-four">Town: </h3>
                        <p class="d-inline-block"><input type="text" name="town" value="<?php echo " $town ";?>"></p>
                        <h3 class="feature-title-four">Location: </h3>
                        <p class="d-inline-block"><input type="text" name="location" value="<?php echo " $location ";?>"></p>
                        <h3 class="feature-title-four">War: </h3>
                        <p class="d-inline-block"><input type="text" name="war" value="<?php echo " $war ";?>"></p>
                        <h3 class="feature-title-four">Type: </h3>
                        <p class="d-inline-block"><input type="text" name="type" value="<?php echo " $type ";?>"></p>
                        <h3 class="feature-title-four">Died: </h3>
                        <p class="d-inline-block"><input type="text" name="died" value="<?php echo " $died ";?>"></p>
                        <h3 class="feature-title-four">Other Information: </h3>
                        <p class="d-inline-block"><input type="text" name="otherinfo" value="<?php echo " $otherinfo ";?>"></p>
                        <h3 class="feature-title-four">Date Added: </h3>
                        <p class="d-inline-block"><input type="text" name="dateadded" value="<?php echo " $dateadded ";?>"></p>
                        <h3 class="feature-title-four">User ID: </h3>
                        <p class="d-inline-block"><input type="text" name="userid" value="<?php echo " $userid ";?>"></p>
                        <p><input type="submit" name="delete" value="Delete Record"></p> <!-- Display the information along with button to delete the information-->



                    </form>

                </div>

                <?php }?>


        </div>
    </div>




    <?php include("footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="main.js"></script>

</body>

</html>

<?php
mysqli_close($conn);
?>
