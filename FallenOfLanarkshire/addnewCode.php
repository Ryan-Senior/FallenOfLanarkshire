<?php include "connaddress.php";

function redirect_to( $location = NULL) {
    if ($location != NULL) {
        header("Location: {$location}");
        exit;
    }
}
if (isset($_POST['addrecord'])) {  
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
    
    
$sql="INSERT INTO soldier (surname,forenames,serviceno,rank,regiment,recorded01,recorded02,recorded03,recorded04,recorded05,recorded06,town,location,war,type,died,otherinfo,dateadded,userid) VALUES ('$surname','$forenames','$serviceno','$rank','$regiment','$recorded01','$recorded02','$recorded03','$recorded04','$recorded05','$recorded06','$town','$location','$war','$type','$died','$otherinfo','$dateadded','$userid')"; // add information the user inputted on previous page to database
}


if (!mysqli_query($conn, $sql))
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}else{
    redirect_to('loginsuccess.php'); //if information is successfully added then user goes back to main page
}


mysqli_error($conn)
    ?>
