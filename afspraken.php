<!DOCTYPE html>
<html lang="en">
<?php
/*destroycookie(){
    setcookie("dagwaarde", "",time()-3600);
}*/
  ?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://use.fontawesome.com/1a4d35d4d9.js"></script>
    <title>Re-cycle</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/Logo ICON White.png">
    <link rel="stylesheet" href="css/extra.css">
    <link  rel="stylesheet"  href="css/css.css"/>

    <link rel="stylesheet" href="css/agenda.css"/>

    <link rel="stylesheet" href="css/agendar.css"/>

<body>
    <?php
    include 'afsprakenfuncties.php';
    if (isset($_COOKIE["dagwaarde"])){
        ladendagen();
        ladenform();
    }
    function ladenform(){
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
            "July"=>"Juli",
            "August"=>"Augustus",
            "September"=>"September",
            "October"=>"Oktober",
            "November"=>"November",
            "December"=>"December",
    
        );
        $waardedag = $_COOKIE["dagwaarde"];
        $day = dag($waardedag);
        $check = day($waardedag);
        $maand = maand($waardedag);
        ?>
        <form action="PHP/C/afspraak.php" method = "post"id ='form1'>
        <?php 
        echo" <div><p id='label2' value='".$day."'>".$day."</p>".
        "<p id='label3' value='".$maand."'></p>".$translate[$maand]."</div>";
        echo "<label id='label'>nog geen uur geselecteerd</label>
        <input type='hidden' name='dag' id='hidden2' value='".$check."'>";?>
        <input type="hidden" name="uur" id="hidden" value="">
        <input type ="text" name ="naam" placeholder ="naam" required>
        <input type ="email" name ="email" placeholder ="email" required>
        <input type="number" name ="telefoon" placeholder="telefoonnummer" required>
        <select name="typeonderhoud" id="">
            <option value="1">Klein onderhoud 30 minuten</option>
            <option value="2">Groot onderhoud 1 uur</option>
            <option value="3">Gesprek aankoop fiets 45 minuten</option>
        </select>
        <button type="submit" class='inv' id='button'>Plaats afspraak</button>
    </form>
    <?php
    }
    ?>
    <script src="js/agenda2.js"></script>
</body>
</html> 