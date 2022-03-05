<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fallen of Lanarkshire - Advanced Search</title>
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

    <div class="container p-4 bg-light" id="container">
        <h3 class="feature-title text-center ">Advanced Search</h3>
        <div class="row d-flex justify-content-center">
            <div style="background-color:#659ed3" class="class-help col-lg-7 col-md-8 col-sm-12 mt-1 p-4 shadow rounded">




                <form class="input-group" id="search" action="searchrank.php" method="post">

                    <input type="text" class="form-control rounded mb-2" style="margin-right:10px" placeholder="Rank" name="searchterm" required>


                    <input type="submit" class="btn btn-secondary input-group-addon rounded mb-2" value="search" name="search">
                    <!--allows user to search the database by name -->
                </form>
                <form class="input-group" id="search" action="searchregiment.php" method="post">

                    <input type="text" class="form-control rounded mb-2" style="margin-right:10px" placeholder="Regiment" name="searchterm" required>


                    <input type="submit" class="btn btn-secondary input-group-addon rounded mb-2" value="search" name="search">
                    <!--allows user to search the database by name -->
                </form>
                <form class="input-group" id="search" action="searchtown.php" method="post">

                    <input type="text" class="form-control rounded mb-2" style="margin-right:10px" placeholder="Town" name="searchterm" required>


                    <input type="submit" class="btn btn-secondary input-group-addon rounded mb-2" value="search" name="search">
                    <!--allows user to search the database by name -->
                </form>


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
