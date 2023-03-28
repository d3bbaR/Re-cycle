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

<body class="rolbody">
    <div class="rolcontainer">
        <form action="../C/rol.php" method="post">

            <div class="rolgeg">
                <h2>rol toevoegen</h2>
                <input type="text" name="rol" placeholder="naam rol" required>
            </div>
            <input name="btn" type="submit" value="Voeg toe">
        </form>

        <?php
        foreach (query($rol_sort) as $dat) {
            if ($dat["visible"] == 1) {
                echo "<div class='tb'><p>rol:" . $dat["rol"] . "</p> 
        <form action='../E/rol.php' method='post'> <button name ='edit' value='" . $dat["PK"] . "'><i class='fa fa-pencil'></i></button></form>" .
                    "<form action='../D/rol.php' method='post'> <button name ='delete' value='" . $dat["PK"] . "'><i class='fa fa-trash'></i></button></form><i class = 'fa fa-eye'></i></div>";
            } else {
                echo "<div class='tb'><p>rol:" . $dat["rol"] . "</p> 
        <form action='../E/rol.php' method='post'> <button name ='edit' value='" . $dat["PK"] . "'><i class='fa fa-pencil'></i></button></form>" .
                    "<form action='../D/rol.php' method='post'> <button name ='delete' value='" . $dat["PK"] . "'><i class='fa fa-trash'></i></button></form><i class = 'fa fa-eye-slash'></i></div>";
            }

        }
        ?>
    </div>

</body>

</html>