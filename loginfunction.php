<?php
include "PHP/functions.php";
include "PHP/conn.php";
//sessions gebruiken
session_start();

//variabelen declareren


$username1 = $_POST["username"];
$password1 = $_POST["password"];

//als Post van "username" wordt gevraagt --> login functie uitvoeren.


    //variabelen opvangen
    $un = $_POST["username"];
    $pw = $_POST["password"];
foreach ( query($account) as $user ) {
    #code
    
    if (password_verify($un,$user["username"]) && password_verify($pw,$user["pw"]) ) {
        //session variabelen aanmaaken bij een hit (pw en un is hetzelfde)
        echo "succesvol";
        $_SESSION["rol"] = $user["FK_rol"];
        $_SESSION["klantid"] = $user["FK_klant"];
        $select = "SELECT * from klant where PK =".$user["FK_klant"];
        foreach (query($select) as $dat)
        $_SESSION["naam"] = $dat["naam"];
        $_SESSION["familienaam"] = $dat["familienaam"];
        $_SESSION["email"] = $dat["email"];
        $_SESSION["telefoon"] = $dat["telefoon"];
      
       
       header("Location:login.php");
        break;
        }
    else{
        header("Location:login.php?bad=1");
    }
    }
        



