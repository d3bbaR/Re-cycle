<?php
//includen pagina's
include "../functions.php";

//opvangen  variabele en wijzigen in database
$pk = $_POST["delete"];
$upd = "DELETE FROM verlof WHERE PK =$pk";
mysqli_query($conn, $upd);
go("R", "verlof");

?>