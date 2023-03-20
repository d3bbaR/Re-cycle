<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <title>Document</title>
</head>
<body class="admindashboard">
<?php
       $folder = scandir('PHP/R');
       echo print_r($folder);
       /*$translate = array( 
        "account"=>"account beheer",
        "allergenen"=>"allergenen beheer",
        "bestellingen"=>"bestellingen beheer",
        "categorie"=>"categorie beheer",
        "foto"=>"foto beheer",
        "gemeente"=>"gemeente beheer",
        "gerecht"=>"gerecht beheer",
        "gerecht_ingrediënt"=>"samenstelling beheer",
        "ingrediënt"=> "ingrediënt beheer",
       "ingrediënt_allergenen"=>"allergenen toewijzen",
       "klanten"=>"klanten beheer",
       "landcode"=>"landcode beheer",
       "pw"=>"ignore",
       "rol"=>"rol beheer",
       "settings"=>"setting beheer"

       ) */
       
    ;
       
       echo "</br></br></br><div class='admindash'><h2>Admin dashboard:</h2>";
       foreach ($folder as $file){
        if(substr($file ,-4 ) == '.php'){
            $filename = substr($file, 0, -4);
            if ([$filename] != "ignore"){
            echo"<div class'admindashbtn'><a href='PHP/R/$file'><button class='adminbtn'>".$filename."</button></a></div>";
            }
        }
       }
       echo "</div>"
       ?>
</body>
</html>