<?php
//includen pagina's
include "../functions.php";

//wegschrijven naar databank & opvangen variabelen
$tekst = $_POST["tekst"];
$insert = "INSERT into tekst (tekst,visible) values ('$tekst', 1) ";
$result = mysqli_query($conn, $insert);
go("R", "tekst");