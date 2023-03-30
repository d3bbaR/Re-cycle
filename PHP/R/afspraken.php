<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/agendar.css">
    <link rel="stylesheet" href="../../css/css.css">
    <title>afsrpaken </title>
</head>
<?php include '../../nav-bar2.php' ; ?>
<body>
    <?php include '../../afsprakenfuncties.php'; ?>

    <div class="afsprakenbevestigen">

        <?php
        ladenklant();
        foreach (query($selector) as $res) {
            if ($res["gekeurd"] == 1) {

            } else {
                echo "<div class ='tb'>" . $res["naam"] . " " . $res["email"] . " " . $res["telefoon"] . " " . $res["type"] . " " . $res["dagen"] . " " . $res["uren"] .
                    "<form action='../C/accept.php' method='post'> <button name ='edit' value='" . $res["FK_geg"] . "'><i class='fa fa-check' style='color:green'></i></button></form>" .
                    "<form action='../C/refuse.php' method='post'> <button name ='delete' value='" . $res["FK_geg"] . "'<i class='fa fa-close' style='color:red'></i></button></form></div>";
            }
        }

        ?>
        <script src="../../js/agenda2.js"></script>
</body>

</html>