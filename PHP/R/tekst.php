<?php
include "../functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Footer</title> 
</head>
<body>

 <form action="../C/tekst.php" method ="post">

    <label >Tekst toevoegen</label>
    <input type="text" name ="tekst" placeholder ="tekst" required>
    <button name ="btn" type ="submit">Voeg toe</button>
</form>
<?php
foreach (query($teskt_sort) as $dat) {
    if($dat["visible"] == 1) {
        echo "<div class='tb'><p>tekst:".$dat["tekst"]."</p> 
        <form action='../E/tekst.php' method='post'> <button name ='edit' value='".$dat["PK"]."'><i class='fa fa-pencil'></i></button></form>".
        "<form action='../D/tekst.php' method='post'> <button name ='delete' value='".$dat["PK"]."'><i class='fa fa-trash'></i></button></form><i class = 'fa fa-eye'></i></div>";
    }
    else{
        echo "<div class='tb'><p>tekst:".$dat["tekst"]."</p> 
        <form action='../E/tekst.php' method='post'> <button name ='edit' value='".$dat["PK"]."'><i class='fa fa-pencil'></i></button></form>".
        "<form action='../D/tekst.php' method='post'> <button name ='delete' value='".$dat["PK"]."'><i class='fa fa-trash'></i></button></form><i class = 'fa fa-eye-slash'></i></div>";
    }

}
?>
</table>

</body>
</html>