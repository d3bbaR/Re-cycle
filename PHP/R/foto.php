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
    <link rel="stylesheet" href="../../css/info.css?3">
    <link href="../../css/cat.css?2" rel="stylesheet" />
    <script src="../../js/file.js"></script>
</head>
<?php
include "../functions.php";
$fietsenarray = [];
echo "<div class='select-box'>" . "<div class='products-box grid-box'>";
foreach (query($catalogus) as $prod) {


    if (in_array($prod['Type'], $fietsenarray)) {


    } else {

        echo "<div data-category= value=" . $prod['Prijs'] . " " . "class='product-box__item' onclick ='gen(\"" . $prod['FietsNr'] . "\")'>
<h3 class='product-box__title'>" . $prod['Type'] . "</h3>
<div class='product-box__img'>
    <img class='img-fluid' src='../../assets/im1-min.png'>
</div>
<div class='product-box__meta'>
    <p>" . $prod['Prijs'] . "  €</p>

</div>
</div>";
        array_push($fietsenarray, $prod['Type']);

    }
}
?>