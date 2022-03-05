<?php include "connaddress.php";


$query="SELECT * FROM soldier ORDER BY rand() LIMIT 1";   //displays one random entry from the database
$result=mysqli_query($conn,$query);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fallen of Lanarkshire - Home Page</title>
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


    <div class="container features " id="container">
        <div class="row d-flex justify-content-between mb-5">
            <div class="class-help col-lg-7 col-md-8 col-sm-12 bg-light mt-1 p-4 shadow rounded">
                <h3 class="feature-title">Search Memorials</h3>

                <p>Anybody with a connection to Lanarkshire; born, schooled, worked, resided or even buried in Lanarkshire are included or are going to be included in a Fallen database<br><br>Fortunately we have a good team of researchers who trawl the web joining up the pieces to make a picture. Which you can now search through below.
                </p>

                <form class="input-group" id="search" action="searchname.php" method="post">

                    <input type="text" class="form-control rounded mb-2" style="margin-right:15px" placeholder="Name" name="searchterm" required>


                    <input type="submit" class="btn btn-secondary input-group-addon rounded mb-2" value="Search" name="search">
                    <!--allows user to search the database by name -->
                </form>

                <a href="advancedsearch.php">Advanced Search</a>
            </div>
            <div class="class-help col-lg-4 col-md-4 col-sm-12 bg-light mt-1 p-4 shadow rounded">
                <h3 class="feature-title">Today's Featured Person</h3>
                <?php

            while ($row=mysqli_fetch_array($result)){
                $id=$row['id'];
                $surname=$row['surname'];	
                $forenames=$row['forenames'];	
                $serviceno=$row['serviceno'];
                $rank=$row['rank'];
                $regiment=$row['regiment'];
                $town=$row['town'];
                $dateadded=$row['dateadded'];
               
        ?>


                    <h3 class="feature-title-four d-inline-block">Name: </h3>

                    <a href="soldierinformation.php?id=<?=$row['id']?>">
                        <!--passes the id of the record to the next page through the link-->

                        <p class="d-inline-block">

                            <?php echo "&nbsp;$forenames " . "$surname";?>
                        </p>
                    </a>
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
                    <h3 class="feature-title-four d-inline-block">Town:</h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$town";?>
                    </p>
                    <br>
                    <h3 class="feature-title-four d-inline-block">Date Added:</h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$dateadded";?>
                    </p>

                    <?php }?>

            </div>

        </div>

        <div class="row">
            <div class="class-help col-lg-12 col-md-12 col-sm-12 bg-light p-4 shadow rounded">
                <h3 class="feature-title">About Us</h3>

                <p>Part of the Lanarkshire Family History Society remit is to record names of those held in the graveyards, and on memorials for enquirers into their family tree from anybody around the globe. An extension to that is the fallen heroes in the Great War, by collating individual Memorials, Plaques and Roll of Honour (MPRoH).</p>
                <p> It was noted that there is an overlap between the various MPRoH’s, in a village or town and even between villages and towns, as many of the fallen are remembered in more the than one village or town.</p>
            </div>
        </div>

    </div>
    <?php include("footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <!--displays the image on the index-->
</body>

</html>
