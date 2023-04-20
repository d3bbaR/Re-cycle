<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/agenda.css?1">
    <link rel="stylesheet" href="../../css/css.css">
    <title>afsrpaken </title>
</head>
<?php include '../../nav-bar2.php'; ?>

<body>
    <?php include '../../afsprakenfuncties.php'; 
    $maand = date("m");
    $dag = date('d');
    ?>
    <div class="afsprakenbevestigen">

        <?php
        ladenklant();
        $x = 0;
        foreach (query($selector) as $res) {

            if ($res["gekeurd"] == 1) {

            } else {
                $x+= 1;
                echo "<div class ='tb'>" . $res["naam"] . " " . $res["email"] . " " . $res["telefoon"] . " " . $res["type"] . " " . $res["dagen"] . " " . $res["uren"] .
                    "<form action='../C/accept.php' method='post'> <button name ='edit' value='" . $res["FK_geg"] . "'><i class='fa fa-check' style='color:green'></i></button></form>" .
                    "<form action='../C/refuse.php' method='post'> <button name ='delete' value='" . $res["FK_geg"] . "'<i class='fa fa-close' style='color:red'></i></button></form></div>";
                $datum =  strval($res["dagen"]);
                $uur = $res["uren"];
                $str = date_create($datum);
                $res = date_format($str,"m");
                $res2 = date_format($str,"d");
                $dagid = $res2 - $dag;
                echo "<p id ='d".$x."'>". $dagid."</p>";
                echo "<p id ='uur".$x."'>".$uur."</p>";
            }
        }
        echo "<p id ='hoeveel'>".$x."</p>";

        ?>
        <script src="../../js/agenda2.js?1"></script>
        <script src="../../js/afspraak.js?12"></script>
</body>

</html>