<?php
include "../functions.php";

$rol = $_POST["rol"];
$insert = "INSERT into rol (rol,visible) values ('$rol', 1) ";
$result = mysqli_query($conn,$insert);
go("R","rol");