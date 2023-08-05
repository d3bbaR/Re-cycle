<?php
include "conn.php";
include "functions.php";
$counter = 2;
$rows = $_POST["rows"];
$teller = 2;
while ($rows > $counter) {
    $fietsnr = mysqli_real_escape_string($conn, $_POST['FietsNR_' . $counter]);
    $voorraad = mysqli_real_escape_string($conn, $_POST['Voorraad_' . $counter]);
    if ($voorraad == "Voorraad") {
        $hvl = 1;
    } else {
        $hvl = 0;
    }
    $merk = mysqli_real_escape_string($conn, $_POST['Merk_' . $counter]);
    $type = mysqli_real_escape_string($conn, $_POST['Type_' . $counter]);
    $kleur = mysqli_real_escape_string($conn, $_POST['Kleur_' . $counter]);
    $cat = mysqli_real_escape_string($conn, $_POST['Cat_' . $counter]);
    $frame = mysqli_real_escape_string($conn, $_POST['Frame_' . $counter]);
    $wielmaat = mysqli_real_escape_string($conn, $_POST['Wielmaat_' . $counter]);
    $jaar = mysqli_real_escape_string($conn, $_POST['Jaar_' . $counter]);
    $status = mysqli_real_escape_string($conn, $_POST['Status_' . $counter]);
    $demo = mysqli_real_escape_string($conn, $_POST['Demo_' . $counter]);
    $maat = mysqli_real_escape_string($conn, $_POST['Maat_' . $counter]);
    $versnellingen = mysqli_real_escape_string($conn, $_POST['Versnellingen_' . $counter]);
    $prijs = mysqli_real_escape_string($conn, $_POST['Prijs_' . $counter]);

    $foto = "";

    $pkselect = "SELECT FietsNr FROM catalogus";
    foreach (query($pkselect) as $PK) {
        if ($PK["FietsNr"] != $fietsnr) {
            $teller += 1;
            if ($teller == $rows) {
                $del = "DELETE FROM catalogus WHERE FietsNR =$PK[FietsNr] ";
            }
        } else {
        }
    }
    $counter += 1;
    $select = "SELECT * from  catalogus where FietsNR =" . $fietsnr;
    $ans = query($select);

    if (empty($ans) == true) {
        $insert = "INSERT into catalogus (FietsNr, Voorraad, Merk, Type, Kleur, Cat, Frame, Wielmaat, Jaar, Status, Demo, Maat, Versnellingen, Prijs, 
        Framenr,foto)values ($fietsnr,$hvl,'$merk','$type','$kleur','$cat','$frame',$wielmaat,$jaar,'$status','$demo','$maat',$versnellingen,$prijs,'assets/im1-min.png')";
        echo $insert;
        $result = mysqli_query($conn, $insert);
    } else {
        $upd = "UPDATE catalogus SET Voorraad =$hvl,Merk ='$merk',Type = '$type',Kleur ='$kleur' ,Cat='$cat' ,Frame='$frame' 
        ,Wielmaat=$wielmaat ,Jaar=$jaar,Status='$status' ,Demo='$demo' ,Maat='$maat' ,Versnellingen=$versnellingen ,Prijs= $prijs
        where FietsNr = $fietsnr";
        echo print_r($upd) . "<br>";
        $result = mysqli_query($conn, $upd);

    }
}
header("Location:R/catalogus.php?goed=1");






?>