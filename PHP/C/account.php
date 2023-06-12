<?php
//includen pagina's
include "../conn.php";
include "../functions.php";
// opvangen variabelen escape string voor tekens zoals '
$password = mysqli_real_escape_string($conn, $_POST["paswoord"]);
$password2 = mysqli_real_escape_string($conn, $_POST["paswoord2"]);
// Verkeerde 2de wachtwoord
if ($password != $password2) {
    header("Location:../../registreren.php?bad=1");

} else {
    //Wegschrijven klanten
    $naam = mysqli_real_escape_string($conn, $_POST['naam']);
    $familienaam = mysqli_real_escape_string($conn, $_POST['familienaam']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telefoon = mysqli_real_escape_string($conn, $_POST['telefoon']);
    $insert = "INSERT INTO klant (naam,familienaam,email,telefoon)
values ('$naam','$familienaam','$email','$telefoon')";
    $result = mysqli_query($conn, $insert);
    echo $result;
    $pk = mysqli_insert_id($conn);


    //Wegschrijven account
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $pw = sha1($password);
    $un = sha1($username);
    $insert = "INSERT INTO account (username,pw,FK_rol,FK_klant)
Values ('$un','$pw',2,$pk)";
    echo $insert;
    $result = mysqli_query($conn, $insert);
}
header("Location:../../login.php");