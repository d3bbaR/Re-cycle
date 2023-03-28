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

<body class="footerdash">

    <div class="dashboardfooter">
        <form action="../C/footer.php" method="post">

            <div class="gegdash">
                <div class="centerdash">
                    <h2>Openingsuren toevoegen</h2>
                    <div class="footergeg">
                        <input type="text" name="gegevens" placeholder="naam dag" required>
                    </div>
                    <div class="footergeg">
                        <input type="text" name="uren" placeholder="uren" required>
                    </div>
                </div>
                <br>

                <button class="btn" name="btn" type="submit" value=1>Voeg toe</button>
                <br>
                <div class="centerdash">
        </form>
        <form action="../C/footer.php" method="post">
            <h2>Tekst toevoegen</h2>
            <div class="footergeg">
                <input type="text" name="tekst" placeholder="tekst" required>
            </div>
            <br>
            <button class="btn" name="btn" type="submit" value=2>Voeg toe</button>
    </div>
    </div>
    </form>
    </div>

    <div class="footercontainer">
        <h2>Response: </h2>




        <?php
        foreach (query($footer_sort) as $dat) {
            if ($dat["visible"] == 1) {
                if ($dat["tekst"] == "0") {

                    echo "<div class ='tb'><p>dag:" . " " . $dat["gegevens"] . "</p><p>:" . " " . $dat["uren"] . "" .
                        "<form action='../E/footer.php' method='post'> <button name ='edit' value='" . $dat["PK"] . "'><i class='fa fa-pencil'></i></button></form>" .
                        "<form action='../D/footer.php' method='post'> <button name ='delete' value='" . $dat["PK"] . "'><i class='fa fa-trash'></i></button></form><i class = 'fa fa-eye'></i></div>";

                } else {
                    echo "<div class ='tb'><p>tekst:" . " " . $dat["tekst"] . "" .
                        "<form action='../E/footer.php' method='post'> <button name ='edit' value='" . $dat["PK"] . "'><i class='fa fa-pencil'></i></button></form>" .
                        "<form action='../D/footer.php' method='post'> <button name ='delete' value='" . $dat["PK"] . "'><i class='fa fa-trash'></i></button></form><i class = 'fa fa-eye'></i></div>";
                }
            } else {
                if ($dat["tekst"] == "0") {
                    echo "<div class ='tb'><p>dag:" . " " . $dat["gegevens"] . "</p><p>:" . " " . $dat["uren"] . "" .
                        "<form action='../E/footer.php' method='post'> <button name ='edit' value='" . $dat["PK"] . "'><i class='fa fa-pencil'></i></button></form>" .
                        "<form action='../D/footer.php' method='post'> <button name ='delete' value='" . $dat["PK"] . "'><i class='fa fa-trash'></i></button></form><i class ='fa fa-eye-slash'></i></div>";
                } else {
                    echo "<div class ='tb'><p>tekst:" . " " . $dat["tekst"] . "" .
                        "<form action='../E/footer.php' method='post'> <button name ='edit' value='" . $dat["PK"] . "'><i class='fa fa-pencil'></i></button></form>" .
                        "<form action='../D/footer.php' method='post'> <button name ='delete' value='" . $dat["PK"] . "'><i class='fa fa-trash'></i></button></form><i class ='fa fa-eye-slash'></i></div>";
                }

            }

        }
        ?>
    </div>

</body>

</html>