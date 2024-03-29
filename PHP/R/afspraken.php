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
    <script defer src="../../js/vdg.js?v=2"></script>
    <script defer src="../../js/afspraak.js?v=2"></script>
    <script defer src="../../js/agenda2.js?1"></script>

    <title>afspraken beheer </title>
</head>
<?php /* 
<script>
let afsprakenarray = [];
let testing = "";
let main;
let cookiedag = ""
let dedag = "";
let dit = "";
let testingdag = "";
let dzdag = "";
let dzmaand = "";
let dzuur = "";
let vmaand = new Date();
vmaand = vmaand.getMonth() + 1;
if (vmaand < 10) {
vmaand = "0" + vmaand;
}
$.post("vdg.php",
{
bezeting: 1
},
function (data) {
console.log("data aangekomen");
dit = document.getElementById("datumvandaag").innerHTML;
cookiedag = getCookie("dagwaarde");
dedag = getCookie("Dag");
cookiedag = document.getElementById(cookiedag).innerHTML;
afsprakenarray.push(data);
testing = JSON.parse(afsprakenarray[0]);


load();
});

function load() {
for (let i = 0; i < testing.length; i++) {

dzmaand = testing[i].dag.substring(5, testing[i].dag.length - 3);

dzdag = testing[i].dag.substring(8);
testingdag = dzdag - dit;
let ele = document.getElementById(testingdag);
let soortafspraak = testing[i].geaccepteerd;

if (dzmaand == vmaand) {
if (soortafspraak == 0) {
if (ele.className == "dag bez") {
ele.setAttribute("class", "dag afsprbez");
}
else {
ele.setAttribute("class", "dag afspr");
}


}
else {

if (ele.className == "dag afspr") {
ele.setAttribute("class", "dag afsprbez");
}
else {
ele.setAttribute("class", "dag bez");
}
}

}
else {
console.log("andere maand");
}
if (testing[i].dag == dedag) {
dzuur = testing[i].uur;

if (soortafspraak == 0) {
document.getElementById("d" + dzuur).setAttribute("class", "afspr");
}
else {
document.getElementById("d" + dzuur).setAttribute("class", "bez");
}
}
}

}
function getCookie(name) {
const value = `; ${document.cookie}`;
const parts = value.split(`; ${name}=`);
if (parts.length === 2) return parts.pop().split(';').shift();
}
function modalcreate(uur) {
for (let i = 0; i < testing.length; i++) {
if (testing[i].uur == uur && testing[i].dag == dedag) {
let body = document.getElementById('body');
let modal = document.createElement("div");
modal.setAttribute('id', "modal" + testing[i].uur);
let content = document.createElement("div");
let flexboxtw = document.createElement("div");
flexboxtw.setAttribute("class", "flexboxtb");
content.setAttribute("class", "modal-content");
modal.setAttribute("class", "modal");

let naam = document.createElement("p")
naam.innerHTML = testing[i].naamklant;

let email = document.createElement("p");
email.innerHTML = testing[i].emailklant;

let telefoon = document.createElement("p");
telefoon.innerHTML = testing[i].telefoonklant;

let type = document.createElement("p");
if (testing[i].type == 1) {
type.innerHTML = "Klein onderhoud 30 minuten";
}
else if (testing[i].type == 2) {
type.innerHTML = "Groot onderhoud 1 uur";
}
else if (testing[i].type == 3) {
type.innerHTML = "Gesprek aankoop fiets 45 minuten";
}


let info = document.createElement("p");
info.innerHTML = testing[i].info;

let dtdag = document.createElement("p");
dtdag.innerHTML = testing[i].dag;

let dtuur = document.createElement("p");
dtuur.innerHTML = testing[i].uur;

let btn = document.createElement("button");
button.setAttribute("Class", "btn");
button.innerHTML = "sluiten";
button.addEventListener("click", function () { modalremove(testing[i].uur) })
flexboxtw.appendChild(naam);
flexboxtw.appendChild(email);
flexboxtw.appendChild(telefoon);
flexboxtw.appendChild(type);
flexboxtw.appendChild(dtdag);
flexboxtw.appendChild(dtuur);
flexboxtw.appendChild(info);
flexboxtw.appendChild(button);

if (testing[i].gekeurd == 0) {
let aform = document.createElement("form");
let sform = document.createElement("form");
aform.setAttribute("class", "center");
aform.setAttribute("action", "../C/accept.php");
aform.setAttribute("method", "POST");
let abutton = document.createElement("button");
abutton.setAttribute("name", "edit");
abutton.setAttribute("value", testing[i].fk);
let asymb =document.createElement("i");
asymb.setAttribute("class", "fa fa-check");
asymb.style.color = "green";

let dsymb =document.createElement("i");
asymb.setAttribute("class", "fa fa-close");
asymb.style.color = "red";
sform.setAttribute("class", "center");
sform.setAttribute("action", "../C/reject.php");
sform.setAttribute("method", "POST");
let dbutton = document.createElement("button");
dbutton.setAttribute("name", "delete");
dbutton.setAttribute("value", testing[i].fk);

abutton.appendChild(asymb);
aform.appendChild(abutton);
dbutton.appendChild(dsymb);
sform.appendChild(dbutton);
flexboxtw.appendChild(aform);
flexboxtw.appendChild(sform);

}
else{

}

content.appendChild(flexboxtw);
modal.appendChild(content);
body.appendChild(modal);
modal.style.display = "block";
}
}
}
function modalremove(tijd) {
let modal = document.getElementById("modal" + tijd);
modal.remove();
}

</script>
*/?>
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

<body id="body">
    <?php
    echo "<p id ='datumvandaag' class=inv>" . date("d") . "</p>";
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

                    echo build_calendar2($month, $year);



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
                        <input name="input" type="hidden" id="input">
                        <label for="" id="label"></label>
                        <label for="" id="label2"></label>
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