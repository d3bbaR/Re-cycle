<?php
include "../functions.php";
$pk = $_POST["edit"];
$gegevens = $_POST["gegevens"];
$uren = $_POST["uren"];
$tekst = $_POST["tekst"];
$visible = $_POST["visible"];
$update ="UPDATE footer set gegevens='$gegevens' ,uren ='$uren' ,tekst='$tekst', visible='$visible' where pk=$pk";
mysqli_query($conn,$update);
go("R","footer");



?>