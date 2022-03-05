<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">


<nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="index.php"><img src="images/fallogo.png" alt="fallenlogo"></a>
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">

            <li class="nav-item">
                <form method="post" action="searchname.php" class="inline">
                    <input type="hidden" name="searchterm" value="">
                    <button type="submit" name="search" value="search" class="nav-link link-button">
    All Records
  </button>
                </form>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="updates.php">Updates</a>
            </li>

        </ul>
    </div>

</nav>

<header class="page-header header container-fluid">
    <div class="overlay">


    </div>
</header>