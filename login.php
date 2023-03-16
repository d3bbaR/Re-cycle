<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <title>Log in</title>
</head>

<body>
    <?php
    if(isset($_SESSION["naam"])){
        if ($_SESSION["rol"] == 1){
    ?>
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
    <div class="container">
        <div class="login">
            <?php
            echo "<h1>Welkom terug bij re-cycle!"." ".$_SESSION["naam"]."</h1>
            <p>account naam:"." ".$_SESSION["naam"]." ".$_SESSION["familienaam"]." </p>
            <p>account email:"." ".$_SESSION["email"]." </p>
            <p>account telefoon:"." ".$_SESSION["telefoon"]." </p>";
        ?>
        <form method="post" action="logout.php">
        <input type="submit" value="logout">
        </form>
        </div>
    </div>
    <?php }}
    else {
    ?>
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
    <?php
    }
    ?>
<?php
?>


<header>
        
    <div class="container">
        <div class="login">
            <h1>Welkom bij re-cycle!</h1>
            <form method="post" action="loginfunction.php">
                <div class="gegevens">
                    <input type="text" name="username" required>
                    <label>Gebruikersnaam</label>
                </div>
                <div class="gegevens">
                    <input type="password" name="password" required>
                    <label>Wachtwoord</label>
                </div>
                <div class="pass">Wachtwoord vergeten?</div>
                <input type="submit" value="login">
                <div class="signup">
                    Geen account?<a href="registreren.php"> Registreer je nu</a>
                </div>
            </form>
            <?php if (isset($_GET["bad"])){
            echo "<p style='color:red'>Je wachtwoord en of username kloppen niet</p>";
        }
        ?>
        </div>
    </div>
</body>
<?php
?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
 <script src="js/script.js"></script>
</html>