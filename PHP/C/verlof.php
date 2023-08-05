<?php
//includen pagina's
include "../functions.php";

//wegschrijven naar databank & opvangen variabelen
$tekst = $_POST["tekst"];
$insert = "INSERT into verlof (tekst) values ('$tekst') ";
$result = mysqli_query($conn, $insert);
go("R", "verlof");