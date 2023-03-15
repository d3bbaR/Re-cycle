<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/agenda.css">
    <title>Afspraken</title>
</head>
<body>
    <?php
    $date = date("Y-m-d");
    $dag = date("d");
    $naammaand = date('F');
    $jaar = date('Y');
    $newDate = date('l', strtotime($date));
    // van engelstalige namen naar nederlandstalige namen
    $translate = array( 
        "Monday"=>"Maandag",
        "Tuesday"=>"Dinsdag",
        "Wednesday"=>"Woensdag",
        "Thursday"=>"Donderdag",
        "Friday"=>"Vrijdag",
        "Saturday"=>"Zaterdag",
        "Sunday"=>"Zondag",
        "January"=>"Januari",
        "February"=>"Februari",
        "March"=>"Maart",
        "April"=>"April",
        "May"=>"Mei",
        "June"=>"Juni",
        "Jule"=>"Julie",
        "August"=>"Augustus",
        "September"=>"September",
        "October"=>"October",
        "November"=>"November",
        "December"=>"December",

    );
    $dagen = array(
        "ma","di","wo","do","vr","za","zo"
    );
  // opzoeken welke dag de eerste van de maand is
    $edag = date('Y-m-01');
    $naamedag = date('l',strtotime($edag));

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
    $naamedag2 = date('l',strtotime($ldag));

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
        date_sub($datume,date_interval_create_from_date_string($ervoor."days"));
        $res = date_format($datume,"d");
        $ervoor -= 1;
        array_push($dagenvoorkalender,$res);
    }
    //begin maand - einder maand --> steken in kalender
    $eerstedag = date('01');
    $laatstedag = date('t');
    $x = $laatstedag - $eerstedag;
    $dat = date_create(strval($edag));
    while ($x != 0){
        date_add($dat,date_interval_create_from_date_string("1 days"));
        $res = date_format($dat,"d");
        $x -= 1;
        array_push($dagenvoorkalender,$res);
    }
    // de volgende maand dagen voor op kalender
    $datuml = date_create(strval($ldag));
    
    while ($erna != 0) {
        $aantal = 1;
        date_add($datuml,date_interval_create_from_date_string($aantal."days"));
        $res = date_format($datuml,'d');
        $erna -= 1;
        array_push($dagenvoorkalender,$res);
    }
    //verwijderen van de 0 voor de 1ste dag 01--> 1
    $trans = array(
        "01"=>"1",
        "02"=>"2",
        "03"=>"3",
        "04"=>"4",
        "05"=>"5",
        "06"=>"6",
        "07"=>"7",
        "08"=>"8",
        "09"=>"9",
        "10"=>"10",
        "11"=>"11",
        "12"=>"12",
        "13"=>"13",
        "14"=>"14",
        "15"=>"15",
        "16"=>"16",
        "17"=>"17",
        "18"=>"18",
        "19"=>"19",
        "20"=>"20",
        "21"=>"21",
        "22"=>"22",
        "23"=>"23",
        "24"=>"24",
        "25"=>"25",
        "26"=>"26",
        "27"=>"27",
        "28"=>"28",
        "29"=>"29",
        "30"=>"30",
        "31"=>"31",
    )   ;
    echo $translate[$newDate]." ".$dag." ".$translate[$naammaand];
    echo "<div class='tabel'>";
    echo "<div class='naamdag'>";
    foreach ($dagen as $day){
      echo "<div class='naam'>".$day."</div>";
    }
    echo "</div>";
    echo "<div class='dagen'>";
    //for each lus pusht alle dagen in de array naar de kalender
    $y = 0; 
    foreach ($dagenvoorkalender as $day ) {
        if ($y < 7){
            echo "<div class='dag'>".$trans[$day]."</div>";
            $y += 1;
        }
        else{
            echo"</div><div class='dagen'>";
            echo "<div class='dag'>".$trans[$day]."</div>";
            $y = 1;
        }
    }
    echo "</div>";
    echo "</div>";
    ?>
    </div>
</body>
</html> 