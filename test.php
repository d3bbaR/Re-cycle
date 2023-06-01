<?php
include 'PHP/functions.php';
include 'PHP/conn.php';
function build_calendar($month, $year)
{

    include 'PHP/conn.php';

    //$mysqli = new mysqli($server, $username, $password, $db);
    $mysqli = $conn;
    $stmt = $mysqli->prepare('select * from dagen where month(dagen) = ? AND year(dagen) = ?');
    $stmt->bind_param('ss', $month, $year);
    $bookings = array();
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $bookings[] = $row['dagen'];
            }

            $stmt->close();
        }
    }


    $daysOfWeek = array('Zondag', 'Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag');
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
    $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
    $numberDays = date('t', $firstDayOfMonth);
    $dateComponents = getdate($firstDayOfMonth);
    $monthName = $dateComponents['month'];
    $dayOfWeek = $dateComponents['wday'];
    $dateToday = date('Y-m-d');

    $prev_month = date('m', mktime(0, 0, 0, $month - 1, 1, $year));
    $prev_year = date('Y', mktime(0, 0, 0, $month - 1, 1, $year));
    $next_month = date('m', mktime(0, 0, 0, $month + 1, 1, $year));
    $next_year = date('Y', mktime(0, 0, 0, $month + 1, 1, $year));
    $calendar = "<center><h2 id='maand'>$translate[$monthName]</h2><h2> $year</h2></center>";
    $calendar .= "<div class='griddrie'><a class='btn btn-primary btn-xs' href='?month=" . $prev_month . "&year=" . $prev_year . "'><= Vorige Maand </a>";
    $calendar .= "<a class='btn btn-primary btn-xs' href='?month=" . date('m') . "&year=" . date('Y') . "'>Deze Maand </a>";
    $calendar .= "<a class='btn btn-primary btn-xs' href='?month=" . $next_month . "&year=$next_year'>Volgende Maand =></a></div>";
    $calendar .= "<br><table class='table table-bordered'>";
    $calendar .= "<tr>";
    foreach ($daysOfWeek as $day) {

        $calendar .= "<th class='header'>$day</th>";
    }

    $calendar .= "</tr><tr>";
    $currentDay = 1;
    if ($dayOfWeek > 0) {
        for ($k = 0; $k < $dayOfWeek; $k++) {
            $calendar .= "<td class='empty'></td>";
        }
    }

    $month = str_pad($month, 2, "0", STR_PAD_LEFT);
    $cd = null;
    while ($currentDay <= $numberDays) {
        if ($dayOfWeek == 7) {
            $dayOfWeek = 0;
            $calendar .= "</tr><tr>";
        }


        $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
        $date = "$year-$month-$currentDayRel";
        $dayName = strtolower(date('l', strtotime($date)));
        $eventNum = 0;
        $today = $date == date('Y-m-d') ? 'today' : '';
        //*
        if ($today) {
            $cd = 0;
            $calendar .= "<td id=$cd class='dag'" . " onclick = 'ladenuren($cd)'>$currentDay</td>";
        } elseif ($date < date('Y-m-d')) {
            if ($dayOfWeek == 4) {
                $calendar .= "<td  class='donderdag'></td>";
            } else {
                $calendar .= "<td class ='gesl'>$currentDay";
            }
        } else {
            if ($dayOfWeek == 4) {
                $calendar .= "<td  class='donderdag'></td>";
            } else {
                $calendar .= "<td id=$cd class='dag'" . " onclick = 'ladenuren($cd)'>$currentDay</td>";
            }
        }
        $currentDay++;
        $dayOfWeek++;
        $cd += 1;

    }

    if ($dayOfWeek < 7) {
        $remainingDays = 7 - $dayOfWeek;
        for ($i = 0; $i < $remainingDays; $i++) {
            $calendar .= "<td class='empty'></td>";
        }
    }

    $calendar .= "</tr></table>";
    return $calendar;

}
function ladenuurvandag()
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
        echo "<div class='flextwee'><div class='kal' id = 'kal" . $day . "'>";
        echo "<div class='urenk' id = 'uren'>";
        foreach (query($bezet_ins) as $bezet) {
            array_push($array, $bezet["uren"]);
        }
        if ($month < 5 or $month > 9) {
            if ($p == 100) {
                
            }

            foreach (query($uren) as $dat) {

                if (in_array($dat["uren"], $array)) {

                    echo "<label class='gesl' for='" . $dat['uren'] . "'>
                            <input type='radio'  class='inv' name='uur'id = '" . $dat['uren'] . "' value ='" . $dat['uren'] . "'>" . $dat["uren"] . "</label>";
                } else {
                    if ($counter >= $p) {

                        if ($dat["uren"] == "19:00-19:30" or $dat["uren"] == "19:30-20:00") {
                        } else {
                            echo "<label class='uren' for='" . $dat['uren'] . "'>
                            <input type='radio' onclick='test()' class='inv' name='uur'id = '" . $dat['uren'] . "' value ='" . $dat['uren'] . "'>" . $dat["uren"] . "</label>";
                        }

                    } else {

                        $counter += 1;
                    }
                }
            }
        } else {
            if ($p == 100) {
                echo "<div class='uren'>"  . "</div>";
            }
            foreach (query($uren) as $dat) {
                if (in_array($dat["uren"], $array)) {

                    echo "<label class='gesl' for='" . $dat['uren'] . "'>
                            <input type='radio'  class='inv' name='uur'id = '" . $dat['uren'] . "' value ='" . $dat['uren'] . "'>" . $dat["uren"] . "</label>";
                } else {
                    if ($counter >= $p) {

                        echo "<label class='uren' for='" . $dat['uren'] . "'>
                        <input type='radio' onclick='test()'class='inv' name='uur'id = '" . $dat['uren'] . "' value ='" . $dat['uren'] . "'>" . $dat["uren"] . "</label>";
                    } else {
                        $counter += 1;
                    }
                }
            }
        }
        echo "</div></div>";
    }
}
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
        echo " <p id='label2'   >" . "</p>" .
            "<p id='label3'  >" . "</p>";
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
        <textarea type="text" name='tekst' id="textarea"></textarea>
        <select name="typeonderhoud" id="">
            <option value="1">Klein onderhoud 30 minuten</option>
            <option value="2">Groot onderhoud 1 uur</option>
            <option value="3">Gesprek aankoop fiets 45 minuten</option>
        </select>
        <button type="submit" class='inv' id='button' onclick="">Plaats afspraak</button>
        <script>function form() {
                let cookie = getCookie("dagwaarde");
                console.log(cookie);
                console.log(document.getElementById(cookie));
                let geselecteerde = document.getElementById(cookie);
                geselecteerde.setAttribute("class", "selected");
                let maand = document.getElementById("maand").innerHTML;
                let dag = document.getElementsByClassName("selected");
                dag = dag[0].innerHTML;
                console.log(maand + " " + dag);
                label2.innerHTML = dag;
                label3.innerHTML = maand;

            }
            function getCookie(name) {
                const value = `; ${document.cookie}`;
                const parts = value.split(`; ${name}=`);
                if (parts.length === 2) return parts.pop().split(';').shift();
            }
            form();</script>

    </form>
    <?php
}
function ladenklant($maand)
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
            left join dagen on dagen.PK = resuren.FK_uren where bezet = 1 and month(dagen.dagen) = $maand";
        $bezet_ins = $bezet . " " . "and FK_dagen =" . $key["PK"];
        //$bezet_ins = $bezet." "."where FK_dagen =".$key["PK"];
        echo "<div class='urenkalender' id = 'uren" . $day . "'>";
        foreach (query($bezet_ins) as $bezet) {
            array_push($array, $bezet["uren"]);
        }
        if ($month < 5 or $month > 9) {
            if ($p == 100) {
                echo "<div class='uren'>wij zijn vandaag gesloten</div>";

            }

            foreach (query($uren) as $dat) {
                if (in_array($dat["uren"], $array)) {
                    echo "<label class='gesl' id='d" . $dat['uren'] . "' for='" . $dat['uren'] . "'>
                                <input type='radio'   class='inv' name='uur'id = '" . $dat['uren'] . "' value ='" . $dat['uren'] . "'>" . $dat["uren"] . "</label>";
                } else {
                    if ($counter >= $p) {

                        if ($dat["uren"] == "19:00-19:30" or $dat["uren"] == "19:30-20:00") {
                        } else {
                            echo "<label class='uren'  id='d" . $dat['uren'] . "' for='" . $dat['uren'] . "'>
                                <input type='radio'   class='inv' name='uur'id = '" . $dat['uren'] . "' value ='" . $dat['uren'] . "'>" . $dat["uren"] . "</label>";
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
                if (in_array($dat["uren"], $array)) {
                    echo "<label class='gesl' id='d" . $dat['uren'] . "' for='" . $dat['uren'] . "'>
                                <input type='radio'   class='inv' name='uur'id = '" . $dat['uren'] . "' value ='" . $dat['uren'] . "'>" . $dat["uren"] . "</label>";
                } else {
                    if ($counter >= $p) {

                        echo "<label class='uren'  id='d" . $dat['uren'] . "' for='" . $dat['uren']  . "'>
                            <input type='radio'  class='inv' name='uur'id = '" . $dat['uren'] . "' value ='" . $dat['uren'] . "'>" . $dat["uren"] . "</label>";
                    } else {
                        $counter += 1;
                    }
                }
            }
        }
        echo "</div>";
    }
    ?>
    <script>function form() {
            let cookie = getCookie("dagwaarde");
            console.log(cookie);
            console.log(document.getElementById(cookie));
            let geselecteerde = document.getElementById(cookie);
            geselecteerde.setAttribute("class", "selected");
            let maand = document.getElementById("maand").innerHTML;
            let dag = document.getElementsByClassName("selected");
            dag = dag[0].innerHTML;
            console.log(maand + " " + dag);


        }
        function getCookie(name) {
            const value = `; ${document.cookie}`;
            const parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        }
        form();</script>

    <?php
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Document</title>


</head>

<body>

    </div>
    </div>
    </div>
</body>
<script src="../../js/agenda2.js?3"></script>

</html>