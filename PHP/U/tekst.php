<?php
include "../functions.php";
$pk = $_POST["edit"];
$tekst = $_POST["tekst"];

$visible = $_POST["visible"];
$update = "UPDATE tekst set tekst='$tekst' , visible='$visible' where pk=$pk";

mysqli_query($conn, $update);
go("R", "tekst");


?>