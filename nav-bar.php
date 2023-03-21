<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <title>Nav-Bar</title>
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

    </html>