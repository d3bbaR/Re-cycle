<?php
include "../functions.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://use.fontawesome.com/1a4d35d4d9.js"></script>
    <title>Re-cycle</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/Logo ICON White.png">
    <link rel="stylesheet" href="../../css/extra.css">
    <link href="../../css/css.css" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="144x144" href="../../assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <? php //<link rel="stylesheet" href="styles.css">?>
    <title>Footer</title>
</head>

<body class="tekstbody">
    <div class="tekstcontainer">
        <form action="../C/tekst.php" method="post">

            <div class="tekstgeg">
                <h2>Tekst toevoegen</h2>
                <input type="text" name="tekst" placeholder="tekst" required>
            </div>
            <input name="btn" type="submit" value="Voeg Toe">
        </form>

        <?php
        foreach (query($teskt_sort) as $dat) {
            if ($dat["visible"] == 1) {
                echo "<div class='tb'><p>tekst:" . $dat["tekst"] . "</p> 
        <form action='../E/tekst.php' method='post'> <button name ='edit' value='" . $dat["PK"] . "'><i class='fa fa-pencil'></i></button></form>" .
                    "<form action='../D/tekst.php' method='post'> <button name ='delete' value='" . $dat["PK"] . "'><i class='fa fa-trash'></i></button></form><i class = 'fa fa-eye'></i></div>";
            } else {
                echo "<div class='tb'><p>tekst:" . $dat["tekst"] . "</p> 
        <form action='../E/tekst.php' method='post'> <button name ='edit' value='" . $dat["PK"] . "'><i class='fa fa-pencil'></i></button></form>" .
                    "<form action='../D/tekst.php' method='post'> <button name ='delete' value='" . $dat["PK"] . "'><i class='fa fa-trash'></i></button></form><i class = 'fa fa-eye-slash'></i></div>";
            }

        }
        ?>


        <body>
            <?php
            session_start();
            if (isset($_SESSION["naam"])) {
                if ($_SESSION["rol"] == 1) {
                    ?>
                    <header>
                        <section class="navigation">
                            <div class="nav-container">
                                <div class="brand">
                                    <a href="index.php"><img class="logonav" alt="Logo" src="../../assets/Re-cycle.png"></a>
                                </div>
                                <nav>
                                    <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                                    <ul class="nav-list">
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="afspraken.php">Afspraken</a>
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
                                            <a href="login.php"><img class="taalpic" alt="Logo"
                                                    src="../../assets/user-interface.png"></a>
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
                                <a href="index.php"><img class="logonav" alt="Logo" src="../../assets/Re-cycle.png"></a>
                            </div>
                            <nav>
                                <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                                <ul class="nav-list">
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="afspraken.php">Afspraken</a>
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
                                        <ul class="dropdown">
                                            <li><a href="">Nuttige Info</a></li>
                                            <li><a href="">Onze Merken</a></li>
                                            <li><a href="">Inruilactie</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="login.php"><img class="taalpic" alt="Logo"
                                                src="../../assets/user-interface.png"></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </section>
                </header>
                <?php
            }
            ?>

            <div class="header2">
                <div class="container2">
                    <div class="first">
                        <div class=box2>
                            <h2><input type="text" value="Re-cycle"> </h2>
                        </div>
                        <a href="cat.php"><input type="text" value="Zie meer fietsen"> <i
                                class="fa fa-angle-right"></a></i>
                        <div class="left">
                            <i class="fa fa-facebook"></i>
                        </div>
                        <div class="second">
                            <div class="overlay">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- about section starts  -->

            <div class="overons">

                <div class="p">
                    <textarea name="" id="" cols="30" rows="10">Re-Cycle is een fietsenwinkel in Lovenjoel. Bij ons kan je terecht voor de aankoop van accessoires,
                nieuwe- en occasie fietsen. We hebben modellen voor iedereen, elektrische fietsen, kinderfietsen,
                stadsfietsen en sportievere modellen. Bij elke aankoop voorzien wij een afstelling op maat of eventueel
                een gepersonaliseerde bikefit. Graag meer informatie? Neem een kijkje op onze website, neem contact op
                of bezoek onze winkel.">
                </textarea>

                </div>
                <div class="p">
                    <input type="text" value="Re-Cycle is tevens een fietsenmaker. We bespreken samen met u hoe de herstelling op een duurzame manier
                kan gebeuren en wanneer deze klaar zal zijn, zodat u niet voor verrassingen komt te staan. Uw
                herstelling is vaak op dezelfde dag al klaar. Kom gerust langs of maak je afspraak hier online. Indien
                beschikbaar, kostenloze leen/vervangfiets bij grote herstelling.">


                </div>
                <div class="img"><img class="imgoverons" src="../../assets/b1.png" alt="foto van een fiets"></div>
            </div>

            <!-- about section ends -->


            <div class="containerservices">
                <h1><input type="text" value="SERVICES"></h1>

                <div class="flex">
                    <a href="#" class="servicehover">
                        <div class="flexservices">
                            <input type="text" value="SNELLE SERVICE">
                            <input type="text" value="Meer info">
                        </div>
                    </a>

                    <a href="" class="servicehover">
                        <div class="flexservices">
                            <input type="text" value="NIEUWE FIETSEN"> </p>
                            <input type="text" value="Meer info">
                        </div>
                    </a>

                    <a href="" class="servicehover">
                        <div class="flexservices">
                            <input type="text" value="TWEEDEHANDS FIETSEN">
                            <input type="text" value="Meer info">
                        </div>
                    </a>

                    <a href="" class="servicehover">
                        <div class="flexservices">
                            <input type="text" value="FIETS VERZEKERING">
                            <input type="text" value="Meer info">
                        </div>
                    </a>

                    <a href="" class="servicehover">
                        <div class="flexservices">
                            <input type="text" value="FIETS LEASING">
                            <input type="text" value="Meer info">
                        </div>
                    </a>

                </div>
            </div>
            <!-- Footer-->
            <footer class="footer">
                <div class="containerf">
                    <div class="row1">
                        <div class="footer-col">
                            <h4><input type="text" value="Contact"></h4>
                            <ul>
                                <li><a href="#"> <input type="text" value="Bruulstraat 100 a 3360 Lovenjoel"> </a></li>
                                <li><a href="#"><input type="text" value="0468 35 70 35"> </a></li>
                                <li><a href="#"><input type="text" value="info@re-cycle.be"></a></li>
                                <li><a href="#"><input type="text" value="BTW BE 0656645854"></a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4><input type="text" value="Nuttige Info"></h4>
                            <ul>
                                <li><a href="#"><input type="text" value="Koopjes"></a></li>
                                <li><a href="#"><input type="text" value="Fiets Leasing"></a></li>
                                <li><a href="merken.php"><input type="text" value="Onze merken"></a></li>
                                <li><a href="#"><input type="text" value="Leen/ Vervagfiets Voorwaarden"></a></li>
                                <li><a href="#"><input type="text" value="Inruilactie"></a></li>
                                <li><a href="#"><input type="text" value="Algemene Verkoopsvoorwaarden"></a></li>
                                <li><a href="#"><input type="text" value="Een Fiets Leasen Via Uw Werkgever"></a></li>

                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4><input type="text" value="Openingsuren"></h4>
                            <ul>
                                <li><a href="#"><input type="text" value="Maandag:             13 tot 19 u*"> </a></li>
                                <li><a href="#"><input type="text" value="Dinsdag:               10 tot 19u*"></a></li>
                                <li><a href="#"><input type="text" value="Woensdag:           10 tot 19 u*"></a></li>
                                <li><a href="#"><input type="text" value="Donderdag:          Gesloten"></a></li>
                                <li><a href="#"><input type="text" value="Vrijdag:                 10 tot 19 u*"></a>
                                </li>
                                <li><a href="#"><input type="text" value="Zaterdag:               9 tot 17 u"></a></li>
                                <li><a href="#"><input type="text" value="Zondag:                 9 tot 13 u"></a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4><input type="text" value="Van Mei t.e.m. September:   tot 20 u"></h4>
                        </div>
                    </div>
                </div>
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
</div>

</body>

</html>