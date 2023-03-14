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
    $username = password_hash($un,2);
    $password = password_hash($pw,1);
   
    

foreach ( query($account) as $user ) {
    #code
    if (password_verify($un,$user["username"]) && password_verify($pw,$user["pw"]) ) {
        //session variabelen aanmaaken bij een hit (pw en un is hetzelfde)
        echo "succeded";
        /*$_SESSION["pk"] = $user["pk_account"];
        $_SESSION["klantid"] = $user["fk_klanten"];
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["rol"] = $user["fk_rol_account"];*/
      
       
        //header("Location:login.php");
        break;
        }
    else{
        echo ",iks";
        //header("Location:login.php?bad=1"); 
    }
    }
        



