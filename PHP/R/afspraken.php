<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="stylesheet" href="../../css/agenda.css?2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/css.css?1">
    <title>afspraken beheer </title>
</head>
<?php include '../../nav-bar2.php'; ?>
<?php if (isset($_COOKIE["dagwaarde"])) {

} else {
    setcookie("dagwaarde", "0");
}
?>
<?php
if (isset($_GET["mail"])) {
    echo "
<script>window.alert('U heeft deze afspraak goedgekeurd. ') </script>";
} ?>
<?php
if (isset($_GET["nomail"])) {
    echo "
<script>window.alert('U heeft deze afspraak gewijgerd. ') </script>";
} ?>
<?php
$transarray = array(
    "1" => "Klein onderhoud 30 minuten",
    "2" => "Groot onderhoud 1 uur",
    "3" => "Gesprek aankoop fiets 45 minuten"

);
?>

<body>
    <?php
    echo "<div class='agendacontainer'>";
    include '../../test.php';

    $maand = date("m");
    $dag = date('d');
    ?>
    <div class="afsprakenbevestigen">
        <div class="containertw">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    $dateComponents = getdate();
                    if (isset($_GET['month']) && isset($_GET['year'])) {
                        $month = $_GET['month'];
                        $year = $_GET['year'];
                    } else {
                        $month = $dateComponents['mon'];
                        $year = $dateComponents['year'];
                    }

                    echo build_calendar($month, $year);



                    echo ladenklant($month);
                    $x = 0;
                    $y = 0;
                    $selector2 .= "and month(dagen.dagen) = " . $month;

                    foreach (query($selector2) as $res) {
                        $data = $res["dagen"];
                        $vand = date("Y-m-d");
                        if ($data >= $vand) {
                            if ($res["gekeurd"] == 1) {


                                $y += 1;
                                echo "<div id ='tbl" . $y . "'class='modal'><div class=' modal-content'><div class='flexboxtb'><p>" .
                                    $res["naam"] . "</p><p> " . $res["email"] . "</p><p> " . $res["telefoon"] .
                                    "</p><p> " . $transarray[$res["type"]] . "</p><p> " . $res["dagen"] . "</p><p> " . $res["uren"] . "</p><p> "
                                    . $res["tekst"] . "</p>"
                                    . "</div>.<button class ='btn' onclick ='invisiblel(" . $y . ")'>sluiten </button></div></div>";
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

                                echo "<div id ='tb" . $x . "'class=' modal'><div class=' modal-content'><div class='flexboxtb'><p>" . $res["naam"] . "</p><p> " . $res["email"] . "</p><p> " . $res["telefoon"] . "</p><p> " . $transarray[$res["type"]] . "</p><p> "
                                    . $res["dagen"] . "</p><p> " . $res["uren"] . "</p><p>" . $res["tekst"] . "</p>" .
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


                    echo "<p class='inv' id='hoeveel'>" . $x . "</p>";
                    echo "<p class='inv' id='hoeveell'>" . $y . "</p>";
                    ?>


                    <form action="../C/sluiten.php" class="sluitenform" id="formsluiten" method="post">
                        <label id="label" for=""></label>
                        <label id="label2" for=""></label>
                        <input name="input" type="hidden" id="input">
                        <button name="button" id="button"></button>

                    </form>
                    <button onclick="sluitendag()">sluiten dag</button>
                    <form action="../C/sluitendag.php" class="sluitenform" id="formsluitendag" method="post">
                        <label id="label2dag" for=""></label>
                        <input name="inputdag" type="hidden" id="inputdag">
                        <button name="buttondag" id="buttondag"></button>

                    </form>
</body>
<script src="../../js/file.js?1"></script>

<script src="../../js/afspraak.js?1"></script>
<script src="../../js/agenda2.js?1"></script>

</html>