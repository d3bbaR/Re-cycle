<!DOCTYPE html>
<html lang="en">
<?php
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <title>Log in</title>
</head>

<body>


    <?php include 'nav-bar.php' ?>


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
                   
                    <input type="submit" value="login">
                
                </form>
                <?php if (isset($_GET["bad"])) {
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