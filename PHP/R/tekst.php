<?php
include "../functions.php";
include "../../nav-bar2.php";
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
    <title>Footer</title>
</head>
<div class="containerform">
    <form action="../C/tekst.php" id="CForm" method="post">
        <textarea type="text" name="tekst" placeholder="toevoegen nieuwe tekst" required></textarea>
        <button type="submit">Toevoegen </button>

    </form>
</div>
<?php
foreach (query($tekst) as $dat) {
    echo "<div class='tekstitem'> <textarea>  " . $dat["tekst"] . "</textarea>
    <form action='../E/tekst.php' method='post'> <button name ='edit' value='" . $dat["PK"] . "'><i class='fa fa-pencil'></i></button></form>" .
        "<form action='../D/tekst.php' method='post'> <button name ='delete' value='" . $dat["PK"] . "'><i class='fa fa-trash'></i></button></form></div>";
    ;
}

?>