<?php
include "../conn.php";
include "../functions.php";
$dag = $_POST["dag"];
$uur = $_POST["uur"];
$naam = $_POST["naam"];
$email = $_POST["email"];
$telefoon = $_POST["telefoon"];
$type = $_POST["typeonderhoud"];

$fk_dagen = "SELECT * from dagen where dagen = '".$dag."'";


$fk_uren = "SELECT * from uren where uren = '".$uur."'";
$res2 = query($fk_uren);

foreach (query($fk_dagen) as $res){
    echo "1<br>";
    foreach (query($fk_dagen) as $res2){
        echo "2<br>";
        $pk = "SELECT * from resuren where FK_uren = $res[PK] and FK_dagen = $res2[PK]";
        foreach (query($pk) as $res3){
            echo "3<br>";
            $update ="UPDATE resuren set FK_uren=$res[PK] ,FK_dagen =$res2[PK] ,bezet=1 where pk=$res3[PK]";
            $result = mysqli_query($conn,$update);
            echo $update;
        }
    }
}


echo "halllooooo";
header("Location:../bevestigd.php");


?>