<?php
include "PHP/R/iets.php";
$server = "minoffice.be";
$username = "miniemen_baftech";
$password = "$hallo";
$db = "miniemen_baftech";
$conn = mysqli_connect($server, $username, $password, $db);
//echo "ik ben included";
//check if connection is established
/*if (mysqli_connect_errno()){
    echo "Connection is not established. Please try again.".mysqli_error();
    exit();
}
else {
    echo "Connection established";
}

*/
?>