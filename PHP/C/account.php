<?php
include "../conn.php";
include "../functions.php";
$password = mysqli_real_escape_string($conn,$_POST["password"]);
$password2 = mysqli_real_escape_string($conn,$_POST["password2"]);
if ($password != $password2){
    header("Location:../../registreren.php?bad=1");

}
else {
//klanten
$naam = mysqli_real_escape_string($conn,$_POST['naam']);
$familienaam = mysqli_real_escape_string($conn,$_POST['familienaam']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$telefoon = mysqli_real_escape_string($conn,$_POST['telefoon']);
$insert = "INSERT INTO klant (naam,familienaam,email,telefoon)
values ('$naam','$familienaam','$email','$telefoon')";
$result = mysqli_query($conn,$insert);
echo $result;
$pk = mysqli_insert_id($conn);


//account
$username = mysqli_real_escape_string($conn,$_POST["username"]);
$pw = password_hash($password,1);
$un = password_hash($username,2);
$insert = "INSERT INTO account (username,pw,FK_rol,FK_klant)
Values ('$un','$pw',2,$pk)";
echo $insert;
$result = mysqli_query($conn,$insert);
}
header("Location:../../login.php");