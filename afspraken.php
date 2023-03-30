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
    <link rel="stylesheet" href="css/css.css" />
    <link rel="stylesheet" href="css/agenda.css" />

<body>
    <?php
    include 'nav-bar.php';
    echo "<div class='agendacontainer'>";
    include 'afsprakenfuncties.php';
    if (isset($_COOKIE["dagwaarde"])) {
        ladendagen();
        ladenform();
    }
    if (isset($_GET["bad"])) {
        echo "<p style='color:red'>Je hebt een onderhoud  van 1 uur aangevraagd maar, er is maar slecht een half uur vrij.</p>";
    }

    ?>
    <script src="js/agenda2.js"></script>
    </div>
</body>

</html>