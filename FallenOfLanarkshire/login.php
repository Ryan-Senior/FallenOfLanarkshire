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
    <div class="container bg-light">
        <div class="row  d-flex justify-content-center">
            <div class="class-help col-lg-12 col-md-12 col-sm-12 pt-5">
                <h2 class="feature-title text-center">Login</h2>

            </div>
            <div style="background-color:#659ed3" class=" col-lg-5 col-md-5 col-sm-12 p-3 mb-3 shadow rounded">

                <form method="post" action="checklogin.php">
                    <input class="form-control rounded mb-2" type="text" name="email" placeholder="Email Address" required>
                    <input class="form-control rounded mb-2" type="password" name="Password" placeholder="Password" required>
                    <input type="submit" class="btn btn-secondary input-group-addon rounded mb-2" name="loginBtn" value="Login Now">
                    <!-- used by user to log in -->
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
