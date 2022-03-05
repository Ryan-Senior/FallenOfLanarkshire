<?php include "connaddress.php";

if(isset($_POST['search'])){
    
    $searchterm=$_POST['searchterm'];

    $escapedsearchterm = mysqli_real_escape_string($conn, $_POST['searchterm']);
    
    $query="SELECT * FROM soldier WHERE regiment like '%$escapedsearchterm%'";
    
    $result=mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fallen of Lanarkshire - Search Regiment</title>
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

        <div class="row justify-content-center">
            <div class="class-help col-lg-12 col-md-12 col-sm-12 m-4 p-4">
                <h2 class="feature-title-five text-center">Regiment Results</h2>

            </div>


            <?php

            while ($row=mysqli_fetch_array($result)){
                $id=$row['id'];
                $surname=$row['surname'];	
                $forenames=$row['forenames'];	
                $serviceno=$row['serviceno'];
                $rank=$row['rank'];
                $regiment=$row['regiment'];
                $dateadded=$row['dateadded'];
                
        ?>


                <div style="background-color:#f2f2f2" class="class-help col-lg-3 col-md-3 col-sm-12 m-4 p-4 shadow rounded">





                    <h3 class="feature-title-four d-inline-block">Name: </h3>

                    <a href="soldierinformation.php?id=<?=$row['id']?>">

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
                    <h3 class="feature-title-four d-inline-block">Date Added:</h3>
                    <p class="d-inline-block">

                        <?php echo "&nbsp;$dateadded";?>
                    </p>


                </div>

                <?php }?>
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
