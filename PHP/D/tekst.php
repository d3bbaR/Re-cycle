<?php
//includen pagina's
include "../functions.php";

//opvangen  variabele en wijzigen in database
$pk = $_POST["delete"];
$upd = "UPDATE tekst set visible=0 where PK=$pk";
mysqli_query($conn, $upd);
go("R", "tekst");

?>