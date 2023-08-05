<?php
include "../functions.php";
$pk = $_POST["edit"];
$tekst = $_POST["tekst"];


$update = "UPDATE verlof set tekst='$tekst'  where pk=$pk";

mysqli_query($conn, $update);
go("R", "verlof");


?>