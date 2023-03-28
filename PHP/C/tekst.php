<?php
include "../functions.php";

$tekst = $_POST["tekst"];
$insert = "INSERT into tekst (tekst,visible) values ('$tekst', 1) ";
$result = mysqli_query($conn, $insert);
go("R", "tekst");