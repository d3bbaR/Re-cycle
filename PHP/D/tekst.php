<?php
include "../functions.php";
$pk = $_POST["delete"];
$upd = "UPDATE tekst set visible=0 where PK=$pk";
mysqli_query($conn, $upd);
go("R", "tekst");

?>