<?php
include "R/iets.php";
$server = "minoffice.be";
$username = "miniemen_baftech";
$password = "$hallo";
$db = "miniemen_baftech";
$conn = mysqli_connect($server, $username, $password, $db);
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