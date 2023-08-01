<?php
//includen andere pagina's
include "../conn.php";
include "../functions.php";
$datum = $_POST["buttondag"];
$fk_dagen = "SELECT * from dagen where dagen = '" . $datum . "'";
echo print_r($fk_dagen);
foreach (query($fk_dagen) as $res2) {
    $pk = "Select * from resuren where FK_dagen =" . $res2["PK"];
    echo print_r($pk);
    foreach (query($pk) as $res3) {
        $update = "UPDATE resuren set bezet=1  where pk=$res3[PK] ";
        echo print_r($update);
        $result = mysqli_query($conn, $update);


    }
}






go("R", "afspraken");
?>