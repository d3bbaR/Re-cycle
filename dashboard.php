<!DOCTYPE html>
<html lang="en">

<head>
    <?php setcookie("dagwaarde", "", time() - 3600); ?>
    <?php setcookie("dagwaarde", "", time() - 3600); ?>
    <?php if (isset($_COOKIE["dagwaarde"])) {

    } else {
        setcookie("dagwaarde", "0");
    }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <title>Document</title>
</head>
<?php include 'nav-bar.php'; ?>

<body class="admindashboard">
    <?php
    $folder = scandir('PHP/R');
    $translate = array(
        "account" => "ignore",
        "foto" => "foto beheer",
        "footer" => "footer ",
        "catalogus" => "catalogus ",
        "iets" => "ignore",
        "rol" => "ignore",
        "afspraken" => "afgspraken",
        "tekst" => "ignore",

    )

    ;

    echo "</br></br></br><div class='admindash'><h2>Admin dashboard:</h2>";
    foreach ($folder as $file) {
        if (substr($file, -4) == '.php') {
            $filename = substr($file, 0, -4);
            if ($translate[$filename] != "ignore") {
                echo "<div class'admindashbtn'><a href='PHP/R/$file'><button class='adminbtn'>" . $filename . "</button></a></div>";
            }
        }
    }
    echo "</div>"
        ?>
</body>

</html>