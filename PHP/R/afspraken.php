<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/agenda.css?1">
    <link rel="stylesheet" href="../../css/css.css?1">
    <title>afsrpaken </title>
</head>
<?php include '../../nav-bar2.php'; ?>

<body>
    <?php
    echo "<div class='agendacontainer'>";
    include 'test.php';

    $maand = date("m");
    $dag = date('d');
    ?>
    <div class="afsprakenbevestigen">

        <?php
        echo ladenklant();
        $x = 0;
        $y = 0;
        foreach (query($selector) as $res) {
            $data = $res["dagen"];
            $vand = date("Y-m-d");
            if ($data >= $vand) {
                if ($res["gekeurd"] == 1) {


                    $y += 1;
                    echo "<div id ='tbl" . $y . "'class=' modal'><div class=' modal-content'><div class='flexboxtb'><p>" . $res["naam"] . "</p><p> " . $res["email"] . "</p><p> " . $res["telefoon"] . "</p><p> " . $res["type"] . "</p><p> " . $res["dagen"] . "</p><p> " . $res["uren"] . "</p>" .
                        "</div>.<button class ='btn' onclick ='invisiblel(" . $y . ")'>sluiten </button></div></div>";
                    $datum = strval($res["dagen"]);
                    $uur = $res["uren"];
                    $str = date_create($datum);
                    $res = date_format($str, "m");
                    $res2 = date_format($str, "d");
                    $dagid = $res2 - $dag;
                    echo "<p class='inv'id ='dl" . $y . "'>" . $dagid . "</p>";
                    echo "<p class='inv'id ='uurl" . $y . "'>" . $uur . "</p>";
                } else {
                    $x += 1;

                    echo "<div id ='tb" . $x . "'class=' modal'><div class=' modal-content'><div class='flexboxtb'><p>" . $res["naam"] . "</p><p> " . $res["email"] . "</p><p> " . $res["telefoon"] . "</p><p> " . $res["type"] . "</p><p> " . $res["dagen"] . "</p><p> " . $res["uren"] . "</p>" .
                        "</div><form class ='center'action='../C/accept.php' method='post'> <button name ='edit' value='" . $res["FK_geg"] . "'><i class='fa fa-check' style='color:green'></i></button></form>" .
                        "<form class='center' action='../C/refuse.php' method='post'> <button name ='delete' value='" . $res["FK_geg"] . "'<i class='fa fa-close' style='color:red'></i></button></form>
                    <button class ='btn' onclick ='invisible(" . $x . ")'>sluiten </button></div></div>";
                    $datum = strval($res["dagen"]);
                    $uur = $res["uren"];
                    $str = date_create($datum);
                    $res = date_format($str, "m");
                    $res2 = date_format($str, "d");
                    $dagid = $res2 - $dag;
                    echo "<p class='inv' id ='d" . $x . "'>" . $dagid . "</p>";
                    echo "<p class='inv'id ='uur" . $x . "'>" . $uur . "</p>";
                }
            }
        }
        echo "<p class ='inv'id ='hoeveel'>" . $x . "</p>";
        echo "<p class ='inv'id ='hoeveell'>" . $y . "</p>";

        ?>
        <script src="../../js/agenda2.js?4"></script>
        <script src="../../js/afspraak.js?4"></script>
</body>

</html>