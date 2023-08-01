<?php

if (isset($_POST["bezeting"])) {
    dagen();

}
;











function dagen()
{
    include "../functions.php";

    $arrayt = array();
    foreach (query($selector2) as $res) {
        $data = $res["dagen"];
        $vand = date("Y-m-d");

        if ($data >= $vand) {
            array_push($arrayt, ["dag" => $res["dagen"], "uur" => $res["uren"], "type" => $res["type"] , "geaccepteerd" => $res["gekeurd"], "naamklant" => $res["naam"], "emailklant" => $res["email"], "telefoonklant" => $res["telefoon"], "info" => $res["tekst"]]);
        }
    }



    echo json_encode($arrayt);

}

?>