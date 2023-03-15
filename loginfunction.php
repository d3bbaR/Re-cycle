<?php
include "/PHP/conn.php";
include "PHP/functions.php";
//sessions gebruiken
session_start();

//variabelen declareren


$username1 = $_POST["username"];
$password1 = $_POST["password"];

//als Post van "username" wordt gevraagt --> login functie uitvoeren.

<<<<<<< Updated upstream
=======


>>>>>>> Stashed changes

    //variabelen opvangen
    $un = $_POST["username"];
    $pw = $_POST["password"];
    $username = password_hash($un,2);
    $password = password_hash($pw,1);
   
    

<<<<<<< Updated upstream
foreach ( query($account) as $user ) {
    #code
    if (password_verify($un,$user["username"]) && password_verify($pw,$user["pw"]) ) {
=======
    echo "ik ben hier";
    #code
    if (password_verify($un,$user["username"]) = 1 && password_verify($pw,$user["pw"])) = 1 {
>>>>>>> Stashed changes
        //session variabelen aanmaaken bij een hit (pw en un is hetzelfde)
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
<<<<<<< Updated upstream
        
        header("Location:login.php?bad=1"); 
=======
        echo "u suck";
        //header("Location:login.php?bad=1"); 
>>>>>>> Stashed changes
    }
    
        



