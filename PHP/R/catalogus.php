<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css.css">
    <title>Document</title>
</head>

<body>
    <div class="uploadcontainer">
        <?php include '../../nav-bar2.php'; ?>
        <form class="uploadform" action="../upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="FuResume" id="FuResume">
            <button type="submit">upload file</button>
        </form>
        <?php
        if (isset($_GET["succes"])) {
            echo "<p style='color:green'>Je hebt de file succesvol geupload.</p>";
        }
        if (isset($_GET["goed"])) {
            echo "<p style='color:green'>Je hebt de catalogus succesvol bijgewerkt.</p>";
        }
        ?>
        <form action="../readfile.php" method="post">
            <button type="submit"> vernieuw de catalogus</button>
        </form>
    </div>
</body>

</html>