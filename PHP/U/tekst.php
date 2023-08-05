<?php
include "../functions.php";
$pk = $_POST["edit"];
$tekst = $_POST["tekst"];


$update = "UPDATE tekst set tekst='$tekst'  where pk=$pk";

mysqli_query($conn, $update);
go("R", "tekst");


?>