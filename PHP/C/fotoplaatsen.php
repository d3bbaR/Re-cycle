<?php
$naam = $_POST["naamfoto"];
$pk = $_POST["pkbtn"];
echo $naam . " " . $pk;
$FileName = "../../../../assets";
echo print_r($_FILES);
$TmpName = $_FILES['FuResume']['tmp_name'];

move_uploaded_file($TmpName, $FileName);


?>