<?php

session_start();
include_once 'PHP/functions.php';
$verlof = "";
$verloftekst = "";
foreach (query($verlof_pk) as $dat) {
    if ($dat["tekst"] == "") {
        $verlof = "f";
    } else {
        $verlof = "t";
        $verloftekst = $dat["tekst"];
    }
}
$day = date("l");
$date = date("j-n");
$feestdagen = array(
    "1-1",
    "1-5",
    "21-7",
    "15-8",
    "1-11",
    "11-11",
    "25-12"
);
if (in_array($date, $feestdagen)) {
    $day = "Feestdag";
}
$month = date("n");
if ($month < 5 or $month > 9) {
    $urenarray = array(
        "Monday" => "13:00 - 19:00",
        "Tuesday" => "10:00 - 19:00",
        "Wednesday" => "10:00 - 19:00",
        "Thursday" => "Gesloten",
        "Friday" => "10:00 - 19:00",
        "Saturday" => "9:00 - 17:00",
        "Sunday" => "9:00 - 13:00",
        "Feestdag" => "9:00 - 13:00",
    );
} else {
    $urenarray = array(
        "Monday" => "13:00 - 20:00",
        "Tuesday" => "10:00 - 20:00",
        "Wednesday" => "10:00 - 20:00",
        "Thursday" => "Gesloten",
        "Friday" => "10:00 - 20:00",
        "Saturday" => "9:00 - 17:00",
        "Sunday" => "9:00 - 13:00",
        "Feestdag" => "9:00 - 13:00",
    );

}




if (isset($_SESSION["naam"])) {
    if ($_SESSION["rol"] == 1) {
        ?>
        <header>
            <section class="navigation">
                <div class="nav-container">
                    <div class="brand">
                        <a href="index.php"><img class="logonav" alt="Logo" src="assets/Re-cycle.png"></a>
                    </div>
                    <nav class="nav-re-cycle">
                        <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                        <ul class="nav-list">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="afspraken.php">Afspraken</a>
                            </li>

                            <li>
                                <a href="cat.php">Fietsen</a>
                            </li>
                            <li>
                                <a href="#footer">More</a>
                            </li>
                            <li>
                                <a href="dashboard.php">Dashboard</a>
                            </li>
                            <li>
                                <a href="login.php"><img class="taalpic" alt="Logo" src="assets/user-interface.png"></a>
                            </li>
                            <li>
                                <?php if ($verlof == "t") {
                                    echo "<a id='verlof' href='#openingsuren'>" . $verloftekst;
                                } else { ?>
                                    <a id="opening" href="#openingsuren">
                                        <p>Vandaag :
                                            <?php echo $urenarray[$day];
                                } ?>
                                    </p>
                                </a>
                            </li>


                        </ul>
                    </nav>
                </div>
            </section>
        </header>
        <?php
    }
} else {

    ?>

    <header>
        <section class="navigation">
            <div class="nav-container">
                <div class="brand">
                    <a href="index.php"><img class="logonav" alt="Logo" src="assets/Re-cycle.png"></a>
                </div>
                <nav class="nav-re-cycle">
                    <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                    <ul class="nav-list">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="afspraken.php">Afspraken</a>
                        </li>

                        <li>
                            <a href="cat.php">Fietsen</a>
                        </li>
                        <li>
                            <a href="#footer">More</a>
                        </li>
                        <li>
                            <a href="login.php"><img class="taalpic" alt="Logo" src="assets/user-interface.png"></a>
                        </li>
                        <li>
                            <?php if ($verlof == "t") {
                                echo "<a id='verlof' href='#openingsuren'>" . $verloftekst;
                            } else { ?>
                                <a id="opening" href="#openingsuren">Vandaag :
                                    <?php echo $urenarray[$day];
                            } ?>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </section>
    </header>
    <script src="js/script.js"></script>
    <?php

}
?>