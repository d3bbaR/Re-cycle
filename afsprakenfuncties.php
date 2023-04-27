<?php
include "PHP/functions.php";
include "PHP/conn.php";
$date = date("Y-m-d");
$dag = date("d");
$naammaand = date('F');
$jaar = date('Y');
$newDate = date('l', strtotime($date));
// van engelstalige namen naar nederlandstalige namen
$translate = array(
    "Monday" => "Maandag",
    "Tuesday" => "Dinsdag",
    "Wednesday" => "Woensdag",
    "Thursday" => "Donderdag",
    "Friday" => "Vrijdag",
    "Saturday" => "Zaterdag",
    "Sunday" => "Zondag",
    "January" => "Januari",
    "February" => "Februari",
    "March" => "Maart",
    "April" => "April",
    "May" => "Mei",
    "June" => "Juni",
    "July" => "Juli",
    "August" => "Augustus",
    "September" => "September",
    "October" => "Oktober",
    "November" => "November",
    "December" => "December",

);
$dagen = array(
    "ma",
    "di",
    "wo",
    "do",
    "vr",
    "za",
    "zo"
);
// opzoeken welke dag de eerste van de maand is
$edag = date('Y-m-01');
$naamedag = date('l', strtotime($edag));

//switch voor kalender aan te vullen met dagen ervoor
switch ($translate[$naamedag]) {
    case 'Maandag':
        $ervoor = 0;
        break;
    case 'Dinsdag':
        $ervoor = 1;
        break;
    case 'Woensdag':
        $ervoor = 2;
        break;
    case 'Donderdag':
        $ervoor = 3;
        break;
    case 'Vrijdag':
        $ervoor = 4;
        break;
    case 'Zaterdag':
        $ervoor = 5;
        break;
    case 'Zondag':
        $ervoor = 6;
        break;
}

// de volgende maand dagen krijgen
$ldag = date('Y-m-t');
$naamedag2 = date('l', strtotime($ldag));

//voor het aantel extra vakjes bij de kalender
switch ($translate[$naamedag2]) {
    case 'Maandag':
        $erna = 6;
        break;
    case 'Dinsdag':
        $erna = 5;
        break;
    case 'Woensdag':
        $erna = 4;
        break;
    case 'Donderdag':
        $erna = 3;
        break;
    case 'Vrijdag':
        $erna = 2;
        break;
    case 'Zaterdag':
        $erna = 1;
        break;
    case 'Zondag':
        $erna = 0;
        break;
}
//aanmaken array met alle dagen
$dagenvoorkalender = array(

);

// pushen van dagen in array

while ($ervoor != -1) {
    // de vorige maand dagen voor op kalender
    $datume = date_create(strval($edag));
    date_sub($datume, date_interval_create_from_date_string($ervoor . "days"));
    $res = date_format($datume, "d");
    $ervoor -= 1;
    array_push($dagenvoorkalender, $res);
}
//begin maand - einder maand --> steken in kalender
$eerstedag = date('01');
$laatstedag = date('t');
$x = $laatstedag - $eerstedag;
$dat = date_create(strval($edag));
while ($x != 0) {
    date_add($dat, date_interval_create_from_date_string("1 days"));
    $res = date_format($dat, "d");
    $x -= 1;
    array_push($dagenvoorkalender, $res);
}
// de volgende maand dagen voor op kalender
$datuml = date_create(strval($ldag));

while ($erna != 0) {
    $aantal = 1;
    date_add($datuml, date_interval_create_from_date_string($aantal . "days"));
    $res = date_format($datuml, 'd');
    $erna -= 1;
    array_push($dagenvoorkalender, $res);
}
//verwijderen van de 0 voor de 1ste dag 01--> 1
$trans = array(
    "01" => "1",
    "02" => "2",
    "03" => "3",
    "04" => "4",
    "05" => "5",
    "06" => "6",
    "07" => "7",
    "08" => "8",
    "09" => "9",
    "10" => "10",
    "11" => "11",
    "12" => "12",
    "13" => "13",
    "14" => "14",
    "15" => "15",
    "16" => "16",
    "17" => "17",
    "18" => "18",
    "19" => "19",
    "20" => "20",
    "21" => "21",
    "22" => "22",
    "23" => "23",
    "24" => "24",
    "25" => "25",
    "26" => "26",
    "27" => "27",
    "28" => "28",
    "29" => "29",
    "30" => "30",
    "31" => "31",
);
switch ($translate[$naamedag]) {
    case 'Maandag':
        $ervoor = 0;
        break;
    case 'Dinsdag':
        $ervoor = 1;
        break;
    case 'Woensdag':
        $ervoor = 2;
        break;
    case 'Donderdag':
        $ervoor = 3;
        break;
    case 'Vrijdag':
        $ervoor = 4;
        break;
    case 'Zaterdag':
        $ervoor = 5;
        break;
    case 'Zondag':
        $ervoor = 6;
        break;
}
switch ($translate[$naamedag2]) {
    case 'Maandag':
        $erna = 6;
        break;
    case 'Dinsdag':
        $erna = 5;
        break;
    case 'Woensdag':
        $erna = 4;
        break;
    case 'Donderdag':
        $erna = 3;
        break;
    case 'Vrijdag':
        $erna = 2;
        break;
    case 'Zaterdag':
        $erna = 1;
        break;
    case 'Zondag':
        $erna = 0;
        break;
}
//pushen dagen in nieuw array (deze keer met heel de datum om mee te geven als waarde naar de js in de onclick functie
$jsdagen = array();
$dezedag = date("d");
$eerstedag = date("01");
$dezedag = $trans[$dezedag];
$eerstedag = $trans[$eerstedag];
$w = $eerstedag - $dezedag;
$splice = 0;
while ($ervoor != -1) {
    // de vorige maand dagen voor op kalender
    $ervoor -= 1;
    $w -= 1;
    $splice += 1;
    array_push($jsdagen, $w);
}
array_splice($jsdagen, 0, $splice);
//begin maand - einder maand --> steken in kalender
$laatstedag = date('t');
$laatstedag = $trans[$laatstedag];
$verschild = $laatstedag - $dezedag;
while ($w != 0) {
    $w += 1;
    array_push($jsdagen, $w);
}
while ($w != $verschild) {
    $w += 1;
    array_push($jsdagen, $w);
}
// de volgende maand dagen voor op kalender

while ($erna != 0) {
    $erna -= 1;
    $w += 1;
    array_push($jsdagen, $w);
}


echo "<div><div class='dv'>datum vandaag: " . $translate[$newDate] . " " . $dag . " " . $translate[$naammaand] . "</div>";
echo "<div class='tabel'>";
echo "<div class='naamdag'>";
foreach ($dagen as $day) {
    echo "<div class='naam'>" . $day . "</div>";
}
echo "</div>";
echo "<div class='dagen'>";
//for each lus pusht alle dagen in de array naar de kalender
$y = 0;
$d = 0;
foreach ($dagenvoorkalender as $day) {
    if ($y < 7) {
        if ($jsdagen[$d] < 0) {
            if ($y == 3) {
                echo "<div class='donderdag gesl' id ='" . $jsdagen[$d] . "'>" . $trans[$day] . "</div>";
                $y += 1;
                $d += 1;
            } else {
                echo "<div class='dag gesl' id ='" . $jsdagen[$d] . "'>" . $trans[$day] . "</div>";
                $y += 1;
                $d += 1;

            }
        } else {
            if ($y == 3) {
                echo "<div class='donderdag ' id ='" . $jsdagen[$d] . "'>" . $trans[$day] . "</div>";
                $y += 1;
                $d += 1;
            } else {
                echo "<div class='dag ' id ='" . $jsdagen[$d] . "' onclick = 'ladenuren($jsdagen[$d])'>" . $trans[$day] . "</div>";
                $y += 1;
                $d += 1;

            }
        }
    } else {
        if ($jsdagen[$d] < 0) {
            echo "</div><div class='dagen'>";
            echo "<div class='dag gesl' id ='" . $jsdagen[$d] . "'>" . $trans[$day] . "</div>";
            $y = 1;
            $d += 1;
        } else {
            echo "</div><div class='dagen'>";
            echo "<div class='dag' id ='" . $jsdagen[$d] . "' onclick = 'ladenuren($jsdagen[$d])'>" . $trans[$day] . "</div>";
            $y = 1;
            $d += 1;
        }
    }
}
echo "</div></div></div>";
$dagen = "SELECT * from dagen";
$result = mysqli_query($conn, $dagen);
$maand = date('m');
$maand = $trans[$maand];
$maand = strval($maand);
while ($dag = mysqli_fetch_assoc($result)) {

    if ($dag = $date) {
        break;
    } else {
    }

}


//switch voor waarde vanaf wanneer de uren gegenereerd mogen worden (1 per half uur)

function uren($dat)
{
    $p = 0;
    $translate = array(
        "Monday" => "Maandag",
        "Tuesday" => "Dinsdag",
        "Wednesday" => "Woensdag",
        "Thursday" => "Donderdag",
        "Friday" => "Vrijdag",
        "Saturday" => "Zaterdag",
        "Sunday" => "Zondag",
        "January" => "Januari",
        "February" => "Februari",
        "March" => "Maart",
        "April" => "April",
        "May" => "Mei",
        "June" => "Juni",
        "July" => "Juli",
        "August" => "Augustus",
        "September" => "September",
        "October" => "Oktober",
        "November" => "November",
        "December" => "December",

    );
    $vandaag = date("Y-m-d");
    $vandaag = date_create(strval($vandaag));
    if ($dat < 0) {
    } else {
        if ($dat == 0) {
            $vand = date('l');
        } else {
            $res = date_add($vandaag, date_interval_create_from_date_string($dat . "days"));
            $vand = $res->format('l');
        }

        switch ($translate[$vand]) {
            case 'Maandag':
                $p = 8;
                break;
            case 'Dinsdag':
                $p = 2;
                break;
            case 'Woensdag':
                $p = 2;
                break;
            case 'Donderdag':
                $p = 100;
                break;
            case 'Vrijdag':
                $p = 2;
                break;
            case 'Zaterdag':
                $p = 0;
                break;
            case 'Zondag':
                $p = 0;
                break;
        }
        return $p;

    }
}

function day($data)
{
    $vandaag = date("Y-m-d");
    $maand = date("n");
    $str = date_create(strval($vandaag));
    if ($data < 0) {
        $check = "";
    } else {
        if ($data == 0) {
            $check = $vandaag;
        } else {
            $res = date_add($str, date_interval_create_from_date_string($data . "days"));
            $check = date_format($res, 'Y-m-d');
        }
    }
    return $check;
}
function month($geg)
{
    $today = date("Y-m-d");
    $todaystr = date_create(strval($today));
    if ($geg < 0) {
        $month = "";
    } else {
        if ($geg == 0) {
            $month = date_format($todaystr, 'n');
        } else {
            $resultaat = date_add($todaystr, date_interval_create_from_date_string($geg . "days"));
            $month = date_format($resultaat, 'n');
        }
    }
    return $month;
}
function maand($geg)
{
    $today = date("Y-m-d");
    $todaystr = date_create(strval($today));
    if ($geg < 0) {
        $maand = "";
    } else {
        if ($geg == 0) {
            $maand = date_format($todaystr, 'F');
        } else {
            $resultaat = date_add($todaystr, date_interval_create_from_date_string($geg . "days"));
            $maand = date_format($resultaat, 'F');
        }
    }
    return $maand;
}
function dag($gegeven)
{
    $trans = array(
        "01" => "1",
        "02" => "2",
        "03" => "3",
        "04" => "4",
        "05" => "5",
        "06" => "6",
        "07" => "7",
        "08" => "8",
        "09" => "9",
        "10" => "10",
        "11" => "11",
        "12" => "12",
        "13" => "13",
        "14" => "14",
        "15" => "15",
        "16" => "16",
        "17" => "17",
        "18" => "18",
        "19" => "19",
        "20" => "20",
        "21" => "21",
        "22" => "22",
        "23" => "23",
        "24" => "24",
        "25" => "25",
        "26" => "26",
        "27" => "27",
        "28" => "28",
        "29" => "29",
        "30" => "30",
        "31" => "31",
    );
    $today = date("Y-m-d");
    $todaystring = date_create(strval($today));
    if ($gegeven < 0) {
        $day = "";
    } else {
        if ($gegeven == 0) {
            $day = date_format($todaystring, 'd');
            $day = $trans[$day];
        } else {
            $resultaatday = date_add($todaystring, date_interval_create_from_date_string($gegeven . "days"));
            $day = date_format($resultaatday, 'd');
            $day = $trans[$day];
        }
    }
    return $day;
}
function ladendagen()
{
    $array = array();
    $uren = "SELECT * FROM uren";
    $waardedag = $_COOKIE["dagwaarde"];
    $p = uren($waardedag);
    $counter = 0;
    $check = day($waardedag);
    $day = dag($waardedag);
    $month = month($waardedag);
    $fk_dagen = "SELECT PK from dagen where dagen = '" . $check . "'";
    foreach (query($fk_dagen) as $key) {
        //destroycookie();
        $bezet = "SELECT uren.uren  from resuren left join uren on uren.PK = FK_uren 
        left join dagen on dagen.PK = resuren.FK_uren where bezet = 1";
        $bezet_ins = $bezet . " " . "and FK_dagen =" . $key["PK"];
        //$bezet_ins = $bezet." "."where FK_dagen =".$key["PK"];
        echo "<div class='kal' id = 'kal" . $day . "'>";
        echo "<div class='urenk' id = 'uren'>";
        foreach (query($bezet_ins) as $bezet) {
            array_push($array, $bezet["uren"]);
        }
        if ($month < 5 or $month > 9) {
            if ($p == 100) {
                echo "<div class='uren'>wij zijn vandaag gesloten</div>";
            }

            foreach (query($uren) as $dat) {
                if (in_array($dat["uren"], $array)) {
                    echo "<label class='gesl' for='" . $dat['uren']  . "'>
                            <input type='radio'  class='inv' name='uur'id = '" . $dat['uren']  . "' value ='" . $dat['uren']  . "'>" . $dat["uren"] . "</label>";
                } else {
                    if ($counter >= $p) {

                        if ($dat["uren"] == "19:00-19:30" or $dat["uren"] == "19:30-20:00") {
                        } else {
                            echo "<label class='uren' for='" . $dat['uren']  . "'>
                            <input type='radio' onclick='test()' class='inv' name='uur'id = '" . $dat['uren']  . "' value ='" . $dat['uren']   . "'>" . $dat["uren"] . "</label>";
                        }

                    } else {

                        $counter += 1;
                    }
                }
            }
        } else {
            if ($p == 100) {
                echo "<div class='uren'>" . $dat["uren"] . "</div>";
            }
            foreach (query($uren) as $dat) {
                if ($counter >= $p) {

                    echo "<label class='uren' for='" . $dat['uren']  . "'>
                        <input type='radio' onclick='test()'class='inv' name='uur'id = '" . $dat['uren']  . "' value ='" . $dat['uren']  . "'>" . $dat["uren"] . "</label>";
                } else {
                    $counter += 1;
                }
            }
        }
        echo "</div></div>";
    }
    function ladenform()
    {
        $translate = array(
            "Monday" => "Maandag",
            "Tuesday" => "Dinsdag",
            "Wednesday" => "Woensdag",
            "Thursday" => "Donderdag",
            "Friday" => "Vrijdag",
            "Saturday" => "Zaterdag",
            "Sunday" => "Zondag",
            "January" => "Januari",
            "February" => "Februari",
            "March" => "Maart",
            "April" => "April",
            "May" => "Mei",
            "June" => "Juni",
            "July" => "Juli",
            "August" => "Augustus",
            "September" => "September",
            "October" => "Oktober",
            "November" => "November",
            "December" => "December",

        );
        $waardedag = $_COOKIE["dagwaarde"];
        $day = dag($waardedag);
        $check = day($waardedag);
        $maand = maand($waardedag);
        ?>
        <form action="PHP/C/afspraak.php" method="post" id='form1'>
            <?php
            echo " <p id='label2' value='" . $day . "'>" . $day . "</p>" .
                "<p id='label3' value='" . $maand . "'>" . $translate[$maand] . "</p>";
            echo "<label id='label'>nog geen uur geselecteerd</label>
            <input type='hidden' name='dag' id='hidden2' value='" . $check . "'>"; ?>
            <input type="hidden" name="uur" id="hidden" value="">
            <p></p>
            <label for="naam">Naam*:</label>
            <input type="text" id="naam" name="naam" required>
            <label for="email">Emailadress*:</label>
            <input type="email" id="email" name="email" required>
            <label for="telefoon">Telefoonnummer*:</label>
            <input type="tel" id="telefoon" name="telefoon" required>
            <label for="textarea">Extra informatie:</label>
            <textarea type="text" name ='tekst' id="textarea"></textarea>
            <select name="typeonderhoud" id="">
                <option value="1">Klein onderhoud 30 minuten</option>
                <option value="2">Groot onderhoud 1 uur</option>
                <option value="3">Gesprek aankoop fiets 45 minuten</option>
            </select>
            <button type="submit" class='inv' id='button' onclick="">Plaats afspraak</button>
        </form>
        <?php
    }
}
function ladenklant()
{

    $array = array();
    $uren = "SELECT * FROM uren";
    $waardedag = $_COOKIE["dagwaarde"];
    $p = uren($waardedag);
    $counter = 0;
    $check = day($waardedag);
    $day = dag($waardedag);
    $month = month($waardedag);
    $fk_dagen = "SELECT PK from dagen where dagen = '" . $check . "'";
    foreach (query($fk_dagen) as $key) {
        //destroycookie();
        $geg = "SELECT gegevens.naam,gegevens.email,gegevens.telefoon from resuren 
            left join gegevens on resuren.FK_geg = gegevens.PK where FK_dagen =" . $key["PK"];
        $bezet = "SELECT uren.uren  from resuren left join uren on uren.PK = FK_uren 
            left join dagen on dagen.PK = resuren.FK_uren where bezet = 1";
        $bezet_ins = $bezet . " " . "and FK_dagen =" . $key["PK"];
        //$bezet_ins = $bezet." "."where FK_dagen =".$key["PK"];
        echo "<div class='kal' id = 'kal" . $day . "'>";
        echo "<div class='urenk' id = 'uren" . $day . "'>";
        foreach (query($bezet_ins) as $bezet) {
            array_push($array, $bezet["uren"]);
        }
        if ($month < 5 or $month > 9) {
            if ($p == 100) {
                echo "<div class='uren'>wij zijn vandaag gesloten</div>";

            }

            foreach (query($uren) as $dat) {
                if (in_array($dat["uren"], $array)) {
                    echo "<label class='gesl' id='d" . $dat['uren'] . "' for='" . $dat['uren']  . "'>
                                <input type='radio'   class='inv' name='uur'id = '" . $dat['uren'] . "' value ='" . $dat['uren']  . "'>" . $dat["uren"] . "</label>";
                } else {
                    if ($counter >= $p) {

                        if ($dat["uren"] == "19:00-19:30" or $dat["uren"] == "19:30-20:00") {
                        } else {
                            echo "<label class='uren'  id='d" . $dat['uren']  . "' for='" . $dat['uren'] . "'>
                                <input type='radio'   class='inv' name='uur'id = '" . $dat['uren'] . "' value ='" . $dat['uren']  . "'>" . $dat["uren"] . "</label>";
                        }

                    } else {

                        $counter += 1;
                    }
                }
            }
        } else {
            if ($p == 100) {
                echo "<div class='uren'>" . $dat["uren"] . "</div>";
            }
            foreach (query($uren) as $dat) {
                if ($counter >= $p) {

                    echo "<label class='uren'  id='d" . $dat['uren'] . "' for='" . $dat['uren']. $day . "'>
                            <input type='radio'  class='inv' name='uur'id = '" . $dat['uren'] . "' value ='" . $dat['uren']  . "'>" . $dat["uren"] . "</label>";
                } else {
                    $counter += 1;
                }
            }
        }
        echo "</div></div>";
    }

}
//echo print_r($jsdagen);
//forbidden loop genereren van tussentabel
/*$getal = 0;
while ($getal < 10000){
foreach (query($uren) as $dat){
$fk_u = $dat["PK"];
$insert = "INSERT into resuren (FK_uren,bezet,FK_dagen) Values($fk_u,0,$getal)";
$result = mysqli_query($conn,$insert);

}
$getal +=1;
}*/