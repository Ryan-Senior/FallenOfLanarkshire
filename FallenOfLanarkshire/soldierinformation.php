<?php include "connaddress.php";

$id=( isset($_GET["id"]) && !empty($_GET["id"]) ? $_GET["id"] : "");

// Find the matching record based on the ID passed on the URL
$query="SELECT * FROM soldier WHERE id = $id";
$result=mysqli_query($conn,$query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fallen of Lanarkshire - Soldier Information</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=”description” content="Fallen of Lanarkshire, Reflection of our ancestors">
    <meta name=”keywords” content="fallen,lanarkshire,ww1,ww2,soldiers,scotland">
    <meta name=”robots” content="index,follow">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
</head>

<body>

    <?php include "header.php";?>
    <div style="background-color:#659ed3" class="container">
        <div class="row  d-flex justify-content-center">
            <div class="class-help col-lg-12 col-md-12 col-sm-12 m-4 p-4">
                <h2 class="feature-title-five text-center">Soldier Information</h2>

            </div>


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


                <div style="background-color:#f2f2f2" class="class-help col-lg-8 col-md-8 col-sm-12 bg-light m-3 p-4 shadow rounded">








                    <h3 class="feature-title-four d-inline-block">Name: </h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$forenames " . "$surname";?>
                    </p>
                    <br>

                    <h3 class="feature-title-four d-inline-block">Service Number: </h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$serviceno";?>
                    </p>
                    <br>
                    <h3 class="feature-title-four d-inline-block">Rank: </h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$rank";?>
                    </p>
                    <br>
                    <h3 class="feature-title-four d-inline-block">Regiment: </h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$regiment";?>
                    </p>
                    <br>
                    <h3 class="feature-title-four d-inline-block"> Recorded Location One: </h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$recorded01";?>
                    </p>
                    <br>
                    <h3 class="feature-title-four d-inline-block">Recorded Location Two: </h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$recorded02";?>
                    </p>
                    <br>
                    <h3 class="feature-title-four d-inline-block">Recorded Location Three: </h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$recorded03";?>
                    </p>
                    <br>
                    <h3 class="feature-title-four d-inline-block"> Recorded Location Four: </h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$recorded04";?>
                    </p>
                    <br>
                    <h3 class="feature-title-four d-inline-block">Recorded Location Five: </h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$recorded05";?>
                    </p>
                    <br>
                    <h3 class="feature-title-four d-inline-block">Recorded Location Six:</h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$recorded06";?>
                    </p>
                    <br>
                    <h3 class="feature-title-four d-inline-block">Town:</h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$town";?>
                    </p>
                    <br>
                    <h3 class="feature-title-four d-inline-block">Location:</h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$location";?>
                    </p>
                    <br>
                    <h3 class="feature-title-four d-inline-block"> War fought in:</h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$war";?>
                    </p>
                    <br>
                    <h3 class="feature-title-four d-inline-block">Type of Memorial:</h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$type";?>
                    </p>
                    <br>
                    <h3 class="feature-title-four d-inline-block">Died in war:</h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$died";?>
                    </p>
                    <br>
                    <h3 class="feature-title-four d-inline-block">Other information:</h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$otherinfo";?>
                    </p>
                    <br>
                    <h3 class="feature-title-four d-inline-block">Date Added:</h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$dateadded";?>
                    </p>

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
