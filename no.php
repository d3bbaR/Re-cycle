<?php
include "PHP/conn.php";
$date = date("Y-m-d H:i:s");
$date = date_create($date);
$x = 0;
while ($x < 1000) {

    $res = date_add($date, date_interval_create_from_date_string("1 days"));
    $x += 1;
    $resul = $res->format('Y-m-d H:i:s');
    $insert = "INSERT INTO reservatiedagen (dagen) VALUES('$resul')";
    $result = mysqli_query($conn, $insert);

}
?>