<?php include "connaddress.php";

function redirect_to( $location = NULL) {
    if ($location != NULL) {
        header("Location: {$location}");
        exit;
    }
}

if (isset($_POST['update'])) {
    $id=$_POST['id'];
       $surname=$_POST['surname'];
    $forenames=$_POST['forenames'];
    $serviceno=$_POST['serviceno'];
    $rank=$_POST['rank'];
    $regiment=$_POST['regiment'];
    $recorded01=$_POST['recorded01'];
    $recorded02=$_POST['recorded02'];
    $recorded03=$_POST['recorded03'];
    $recorded04=$_POST['recorded04'];
    $recorded05=$_POST['recorded05'];
    $recorded06=$_POST['recorded06'];
    $town=$_POST['town'];
    $location=$_POST['location'];
    $war=$_POST['war'];
    $type=$_POST['type'];
    $died=$_POST['died'];
    $otherinfo=$_POST['otherinfo']; 
    $dateadded=$_POST['dateadded']; 
    $userid=$_POST['userid'];
    
    // updates the database with information entered by the user
    $query = "UPDATE soldier SET   
            id = '$id',
              surname = '$surname',
              forenames = '$forenames',
              serviceno = '$serviceno',
              rank = '$rank',
              regiment = '$regiment',
              recorded01 = '$recorded01',
              recorded02 = '$recorded02',
              recorded03 = '$recorded03',
              recorded04 = '$recorded04',
              recorded05 = '$recorded05',
              recorded06 = '$recorded06',
              town = '$town',
              location = '$location',
              war = '$war',
              type = '$type',
              died = '$died',
              otherinfo = '$otherinfo',
              dateadded = '$dateadded',
              
              userid = '$userid' WHERE id='$id'";
    
            $result = mysqli_query($conn, $query);
            redirect_to('loginsuccess.php');
}
?>
