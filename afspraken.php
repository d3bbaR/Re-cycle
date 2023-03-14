<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afspraken</title>
</head>
<body>
    <?php
    $date = date("y-m-d");
    $dag = date('F');
    $jaar = date('y');
    echo $jaar;
    $newDate = date('l', strtotime($date));
    $translate = array( 
        "Monday"=>"Maandag",
        "Tuesday"=>"Dinsdag",
        "Wednesday"=>"Woensdag",
        "Thursday"=>"Donderdag",
        "Friday"=>"Vrijdag",
        "Saturday"=>"Zaterdag",
        "Sunday"=>"Zondag",
<<<<<<< Updated upstream
        "January"=>"Januari",
        "February"=>"Februari",
        "March"=>"Maart",
        "April"=>"April",
=======
>>>>>>> Stashed changes
    );
  

    echo $translate[$newDate];

  
    ?>
</body>
</html>