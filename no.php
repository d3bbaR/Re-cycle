<?php
include "PHP/conn.php";
$date = date("2023-03-15");
$date = date_create($date);
$x = 0;
while ($x < 100000) {

    $res = date_add($date, date_interval_create_from_date_string("1 days"));
    $x += 1;
    $resul = $res->format('Y-m-d');
    $maand = $res->format('m');
    $jaar = $res->format('Y');
    $insert = "INSERT INTO resdagen (dagen,maand,jaar) VALUES('$resul','$maand','$jaar')";
    $result = mysqli_query($conn, $insert);

}
?>