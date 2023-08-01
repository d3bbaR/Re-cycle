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
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="../../js/file.js?3"></script>

    <script defer src="../../js/afspraak.js?v=2"></script>
    <script defer src="../../js/agenda2.js?1"></script>

    <title>afspraken beheer </title>
</head>
<script>
    let afsprakenarray = [];
    let array = [];
    let main;
    $.post("vdg.php",
        {
            bezeting: 1
        },
        function (data) {
           
            afsprakenarray.push(data);
            console.log(data);
            console.log(data[0]);
            console.log(afsprakenarray[0[0]]);
            document.getElementById("1").innerHTML = "BJORN";

        });
</script>
<?php include '../../nav-bar2.php'; ?>
<?php if (isset($_COOKIE["dagwaarde"])) {

} else {
    setcookie("dagwaarde", "0");
}
?>
<?php
if (isset($_GET["mail"]) && $_GET["mail"] == "ok") {
    echo "<script>window.alert('U heeft deze afspraak goedgekeurd. ') </script>";
    $_GET["mail"] = "verstuurd";

    //header("Location:afspraken.php");

} ?>
<?php
if (isset($_GET["nomail"])) {
    echo "
<script>window.alert('U heeft deze afspraak gewijgerd. ') </script>";
    $_GET["nomail"] = "verstuurd";

    //header("Location:afspraken.php");

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
                    <input name="input" type="hidden" id="input">

                    <button name="button" id="button"></button>
                    <br>
                    <br>
                    <label for="" onclick="nietsluiten()">Niet sluiten</label>


                    </form>
                    <button onclick="sluitendag()">sluiten dag</button>
                    <form action="../C/sluitendag.php" class="sluitenform" id="formsluitendag" method="post">
                        <label id="label2dag" for=""></label>
                        <input name="inputdag" type="hidden" id="inputdag">
                        <br>
                        <button name="buttondag" id="buttondag"></button>
                        <br>
                        <br>
                        <label for="" onclick="nietsluitendag()">Niet sluiten</label>
                    </form>
</body>


</html>