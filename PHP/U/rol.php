<?php
include "../functions.php";
$pk = $_POST["edit"];
$rol = $_POST["rol"];

$visible = $_POST["visible"];
$update = "UPDATE rol set rol='$rol' , visible='$visible' where pk=$pk";

mysqli_query($conn, $update);
go("R", "rol");


?>