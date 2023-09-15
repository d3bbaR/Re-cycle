<footer class="footer" id="footer">
    <?php
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

    ?>
    <div class="containerf">
        <div class="row1">
            <div class="footer-col">
                <h4>Contact</h4>
                <ul>
                    <li><a href="https://goo.gl/maps/wE5cETZnVauJtNzr9" target=”_blank”>Bruulstraat 100 a 3360
                            Lovenjoel</a></li>
                    <li><a href="tel: +32468357035">0468 35 70 35</a></li>
                    <li><a href="mailto: info@re-cycle.be">info@re-cycle.be</a></li>
                    <li><a href="">BTW BE 0656645854</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>More</h4>
                <ul>

                    <li><a href="leasing.php">Fiets Leasing</a></li>
                    <li><a href="merken.php" target="_blank">Onze merken</a></li>
                    <li><a href="leenvoorwaarden.php">Leen/ Vervagfiets Voorwaarden</a></li>
                    <li><a href="inruilactie.php">Inruilactie</a></li>
                    <li><a href="AVW.php">Algemene Verkoopsvoorwaarden</a></li>


                </ul>
            </div>
            <div class="footer-col" id="openingsuren">
                <h4>Openingsuren</h4>
                <ul>
                    <li><a href="">Maandag:
                            <?php echo $urenarray["Monday"] ?>
                        </a></li>
                    <li><a href="">Dinsdag:
                            <?php echo $urenarray["Tuesday"] ?>
                        </a></li>
                    <li><a href="">Woensdag:
                            <?php echo $urenarray["Wednesday"] ?>
                        </a></li>
                    <li><a href="">Donderdag:
                            <?php echo $urenarray["Thursday"] ?>
                        </a></li>
                    <li><a href="">Vrijdag:
                            <?php echo $urenarray["Friday"] ?>
                        </a></li>
                    <li><a href="">Zaterdag:
                            <?php echo $urenarray["Saturday"] ?>
                        </a></li>
                    <li><a href="">Zondag:
                            <?php echo $urenarray["Sunday"] ?>
                        </a></li>
                    <li><a href="">Feestdagen :
                            <?php echo $urenarray["Feestdag"] ?>
                        </a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Mei t.e.m. September: tot 20 u</h4>
            </div>
        </div>
    </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>