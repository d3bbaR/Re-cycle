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
    $date = date("y-m-d");
    echo $date;
    $dag = date("d");
    $naammaand = date('F');
    $jaar = date('y');
    $newDate = date('l', strtotime($date));
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
  echo $translate[$newDate]." ".$dag." ".$translate[$naammaand];
  echo "<div class='tabel'>";
  echo "<div class='naamdag'>";
  foreach ($dagen as $day){
    echo "<div class='naam'>".$day."</div>";
  }
  echo "</div>";
  // opzoeken welke dag de eerste van de maand is
    $maand = date('m');
    $edag = $jaar."-".$maand."-"."01";
    $emaand = $jaar."-".$maand-1."-"."01";
    $naamedag = date('l',strtotime($edag));

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
    echo $translate[$naamedag]." ".$ervoor."<br>";
    echo "<p>-".$ervoor." "."days</p>";
    echo date($emaand, strtotime("-".strval($ervoor)." "."days"));

  
    ?>
    </div>
</body>
</html>