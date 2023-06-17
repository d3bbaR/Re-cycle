<?php
//includen andere pagina's
include "../conn.php";
include "../functions.php";
$uur = $_POST["input"];
$datum = $_POST["button"];
$fk_dagen = "SELECT * from dagen where dagen = '" . $datum . "'";


$fk_uren = "SELECT * from uren where uren = '" . $uur . "'";

foreach (query($fk_uren) as $res) {
    foreach (query($fk_dagen) as $res2) {
        $pk = "SELECT * from resuren where FK_uren = $res[PK] and FK_dagen = $res2[PK]";
        $pk2 = "SELECT * from resuren where FK_uren = $res[PK]+1 and FK_dagen = $res2[PK]";
        foreach (query($pk2) as $result) {
            foreach (query($pk) as $res3) {
                $update = "UPDATE resuren set FK_uren=$res[PK] ,FK_dagen =$res2[PK] ,bezet=1  where pk=$res3[PK] ";
                $result = mysqli_query($conn, $update);


            }
        }
    }



}

echo $uur . " " . $datum;

?>