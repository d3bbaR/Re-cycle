<?php
//includen pagina
include "../functions.php";

//opvangen  variabele en wijzigen in database
$pk = $_POST["delete"];
$upd = "UPDATE footer set visible=0 where PK=$pk";
mysqli_query($conn, $upd);
go("R", "footer");

?>