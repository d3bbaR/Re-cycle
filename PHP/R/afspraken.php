<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="stylesheet" href="../../css/agendar.css">
    <title>afsrpaken </title>
</head>
<body>
    <?php include '../../afspraken.php';?>  

    <div class="afsprakenbevestigen">
        <?php
        foreach (query($selector) as $res) {
            echo "hallo ";
            # code...
        }

        ?>
    </div>
</body>
</html>