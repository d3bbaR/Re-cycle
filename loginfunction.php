<?php
include "PHP/functions.php";
include "PHP/conn.php";
//sessions gebruiken
session_start();

//variabelen declareren
$users = query($account);

$username1 = $_POST["username"];
$password1 = $_POST["password"];

//als Post van "username" wordt gevraagt --> login functie uitvoeren.
if(isset($_POST["username"])){
    login();
}

function login()
{

    //variabelen opvangen
    $un = $_POST["username"];
    $pw = $_POST["password"];
    $username = password_hash($un,2);
    $password = password_hash($pw,1);
   
    

foreach ( $GLOBALS["users"] as $user ) {
    #code
    if (password_verify($username,$user["username"]) === $un && password_verify($password,$user["pw"]) === $pw) {
        //session variabelen aanmaaken bij een hit (pw en un is hetzelfde)
        echo "succeded";
        /*$_SESSION["pk"] = $user["pk_account"];
        $_SESSION["klantid"] = $user["fk_klanten"];
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["rol"] = $user["fk_rol_account"];*/
      
       
        header("Location:login.php");
        break;
        }
    else{
        //header("Location:login.php?bad=1"); 
    }
    }
        
}


