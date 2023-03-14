<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
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
    <form action="PHP/C/account.php" method ="post">
        <input type="text" name="naam" placeholder="naam">
        <input type="text" name="familienaam" placeholder="familienaam">
        <input type="email" name="email" placeholder="e-mail">
        <input type="text" name="telefoon" placeholder="telefoonnummer">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="paswoord">
        <input type="password" name="password2" placeholder="herhaal paswoord">
        <button type="submit">Registreer</button>
    </form>
    <?php
    if (isset($_GET["bad"])){
        echo "<p style='color:red'>Je wachtwoord is niet hetzelfde, probeer opnieuw</p>";
    }
    ?>

</body>

</html>