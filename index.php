<!DOCTYPE html>
<html lang="en">
<?php setcookie("dagwaarde", "0");
setcookie("Dag", "0");
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://use.fontawesome.com/1a4d35d4d9.js"></script>
    <title>Re-cycle</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/Logo ICON White.png">
    <link rel="stylesheet" href="css/extra.css">
    <link href="css/css.css?1" rel="stylesheet" />
    <link rel="stylesheet" href="css/about.css">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<?php
if (isset($_GET["mail"])) {
    echo "<script>window.alert('de email is verstuurd') </script>";
}
?>

<body>
    <?php include 'nav-bar.php'; ?>
    <?php include 'header.php'; ?>
    <?php include 'overons.php'; ?>
    <?php include 'services.php'; ?>
    <div class="padding"></div>
    <div class="elfsight-app-0871bc9d-5a4e-46d7-9c96-60f94a003a9d bgc"></div>
    <?php include 'contact.php'; ?>
    <div class="padding"></div>
    <?php include 'footer.php'; ?>

    <script src="https://apps.elfsight.com/p/platform.js" defer></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>