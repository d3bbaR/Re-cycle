<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://use.fontawesome.com/1a4d35d4d9.js"></script>
    <title>Re-cycle</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/Logo ICON White.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="css/css.css" rel="stylesheet" />
</head>

<body>
    <?php
    session_start();
    if(isset($_SESSION["naam"])){
        if ($_SESSION["rol"] == 1){
    ?>
    <header>
        <section class="navigation">
            <div class="nav-container">
                <div class="brand">
                    <a href="index.php"><img class="logonav" alt="Logo" src="assets/Re-cycle.png"></a>
                </div>
                <nav>
                    <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                    <ul class="nav-list">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="#">Afspraken</a>
                        </li>
                        <li>
                            <a href="#">Nieuw</a>
                        </li>
                        <li>
                            <a href="#">Cadeau ideeën</a>
                        </li>
                        <li>
                            <a href="#">Fietsen</a>
                        </li>
                        <li>
                            <a href="#">More</a>
                        </li>
                        <li>
                            <a href="dashboard.php">Dashboard</a>
                        </li>
                        <li>
                            <a href="login.php"><img class="taalpic" alt="Logo" src="assets/user-interface.png"></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    </header>
            <?php
        }
    }
        else {
    
            ?>

    <header>
        <section class="navigation">
            <div class="nav-container">
                <div class="brand">
                    <a href="index.php"><img class="logonav" alt="Logo" src="assets/Re-cycle.png"></a>
                </div>
                <nav>
                    <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                    <ul class="nav-list">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="#">Afspraken</a>
                        </li>
                        <li>
                            <a href="#">Nieuw</a>
                        </li>
                        <li>
                            <a href="#">Cadeau ideeën</a>
                        </li>
                        <li>
                            <a href="#">Fietsen</a>
                        </li>
                        <li>
                            <a href="#">More</a>
                        </li>
                        <li>
                            <a href="login.php"><img class="taalpic" alt="Logo" src="assets/user-interface.png"></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    </header>
    <?php
        }
    ?>
    <div class="overons">

        <div class="p">
            <p>
                Re-Cycle is een fietsenwinkel in Lovenjoel. Bij ons kan je terecht voor de aankoop van accessoires,
                nieuwe- en occasie fietsen. We hebben modellen voor iedereen, elektrische fietsen, kinderfietsen,
                stadsfietsen en sportievere modellen. Bij elke aankoop voorzien wij een afstelling op maat of eventueel
                een gepersonaliseerde bikefit. Graag meer informatie? Neem een kijkje op onze website, neem contact op
                of bezoek onze winkel.
            </p>
        </div>
        <div class="p">
            <p>
                Re-Cycle is tevens een fietsenmaker. We bespreken samen met u hoe de herstelling op een duurzame manier
                kan gebeuren en wanneer deze klaar zal zijn, zodat u niet voor verrassingen komt te staan. Uw
                herstelling is vaak op dezelfde dag al klaar. Kom gerust langs of maak je afspraak hier online. Indien
                beschikbaar, kostenloze leen/vervangfiets bij grote herstelling.
            </p>
        </div>
        <div class="img"><img class="imgoverons" src="assets/hd-wallpaper-1872682.jpg" alt="foto van een fiets"></div>
    </div>
    <div class="containerservices">

        <h1>SERVICES</h1>

        <div class="flex">
            <a href="#" class="servicehover">
                <div class="flexservices">
                    <p> SNELLE SERVICE</p>
                    <p>Meer info</p>
                </div>
            </a>

            <a href="" class="servicehover">
                <div class="flexservices">
                    <p>NIEUWE FIETSEN</p>
                    <p>Meer info</p>
                </div>
            </a>

            <a href="" class="servicehover">
                <div class="flexservices">
                    <P>TWEEDEHANDS FIETSEN
                    <p>Meer info</p>
                </div>
            </a>

            <a href="" class="servicehover">
                <div class="flexservices">
                    <P> FIETS VERZEKERING</P>
                    <p>Meer info</p>
                </div>
            </a>

            <a href="" class="servicehover">
                <div class="flexservices">
                    <p> FIETS LEASING</p>
                    <p>Meer info</p>
                </div>
            </a>

        </div>
    </div>
<!-- Footer-->
<footer class="footer">
        <div class="containerf">
            <div class="row1">
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="#">Bruulstraat 100 a 3360 Lovenjoel</a></li>
                        <li><a href="#">0468 35 70 35</a></li>
                        <li><a href="#">info@re-cycle.be</a></li>
                        <li><a href="#">BTW BE 0656645854</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Nuttige Info</h4>
                    <ul>
                        <li><a href="#">Koopjes</a></li>
                        <li><a href="#">Fiets Leasing</a></li>
                        <li><a href="#">Onze merken</a></li>
                        <li><a href="#">Inruilactie</a></li>
                        
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Openingsuren</h4>
                    <ul>
                        <li><a href="#">Maandag:             13 tot 19 u*</a></li>
                        <li><a href="#">Dinsdag:               10 tot 19u*</a></li>
                        <li><a href="#">Woensdag:           10 tot 19 u*</a></li>
                        <li><a href="#">Donderdag:          Gesloten</a></li>
                        <li><a href="#">Vrijdag:                 10 tot 19 u*</a></li>
                        <li><a href="#">Zaterdag:               9 tot 17 u</a></li>
                        <li><a href="#">Zondag:                 9 tot 13 u</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Van Mei t.e.m. September:   tot 20 u</h4>
                </div>
                </div>
            </div>
        </div>
   </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>