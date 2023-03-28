<?php
$FileName = "Uploads/" . $_FILES['FuResume']['name'];
$TmpName = $_FILES['FuResume']['tmp_name'];
move_uploaded_file($TmpName, $FileName);
header("Location:R/catalogus.php?succes=1");

?>