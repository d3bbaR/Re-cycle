<?php
include "../functions.php";
$button = $_POST["btn"];

if ($button == 1){
    $gegevens = $_POST["gegevens"];
    $uren = $_POST["uren"];
    $insert = "INSERT INTO footer (gegevens, uren, tekst,visible)
    VALUES ('$gegevens','$uren','0',1)";
    $result = mysqli_query($conn,$insert);
    echo print_r($result);
    go("R","footer");
}
else{
    $tekst = $_POST["tekst"];
    $insert = "INSERT INTO footer (gegevens, uren ,tekst,visible)
    VALUES ('0','0','$tekst',1)";
    $result = mysqli_query($conn,$insert);
    go("R","footer");
}
?>