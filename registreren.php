<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
</head>

<body class="registratiebody">
<header>
        <section class="navigation">
            <div class="nav-container">
                <div class="brand">
                    <img class="logonav" alt="Logo" src="assets/Re-cycle.png">
                </div>
                <nav>
                    <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                    <ul class="nav-list">
                        <li>
                            <a href="#">Home</a>
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
    <div class="registratiecontainer">
      <h1>Geen Account? Registreer NU!</h1>
      <form action="PHP/C/account.php" method ="post">
         <div class="registratietxt">
            <input placeholder="Voornaam" name="naam" type="text" required>
            <span></span>
         </div>
         <div class="registratietxt">
            <input placeholder="Achternaam" name="familienaam" type="text" required>
            <span></span>
         </div>
         <div class="registratietxt">
            <input placeholder="Email" name="email" type="email" required>
            <span></span>
         </div>
         <div class="registratietxt">
            <input placeholder="Telefoonnummer" name="telefoon" type="number" required>
            <span></span>
         </div>
         <div class="registratietxt">
            <input placeholder="Gebruikersnaam" name="username" type="text" required>
            <span></span>
         </div>
         <div class="registratietxt">
            <input placeholder="Wachtwoord" name="paswoord" type="password" required>
            <span></span>
         </div>
         <div class="registratietxt">
            <input placeholder="Herhaal Wachtwoord" name="paswoord2" type="password" required>
            <span></span>
         </div>
         <input type="submit" value="Registreer">

      </form>
   </div>
    <?php
    if (isset($_GET["bad"])){
        echo "<p style='color:red'>Je wachtwoord is niet hetzelfde, probeer opnieuw</p>";
    }
    ?>

</body>

</html>