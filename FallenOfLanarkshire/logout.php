<?php
session_start();
session_destroy();
header("Location: index.php");

// logs out user and redirects to index page

?>
