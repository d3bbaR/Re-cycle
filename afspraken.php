<!DOCTYPE html>
<html lang="en">
<?php
/*destroycookie(){
setcookie("dagwaarde", "",time()-3600);
}*/
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://use.fontawesome.com/1a4d35d4d9.js"></script>
    <title>Re-cycle</title>
    <script src="js/script.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="assets/Logo ICON White.png">
    <link rel="stylesheet" href="css/agenda.css?2">
    <link rel="stylesheet" href="css/css.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<body>
    <?php
    if (isset($_GET["mail"])) {
        echo "
<script>window.alert('uw afspraak is sucessvol aangemaakt. U krijgt een mail in uw inbox alvast bedankt en tot binnenkort. ') </script>";
    } ?>
    <?php
    include 'nav-bar.php';
    echo "<div class='agendacontainer'>";
    include 'test.php'; ?>
    <div class="containertw">
        <div class="row">
            <div class="col-md-12">
                <?php
                $dateComponents = getdate();
                if (isset($_GET['month']) && isset($_GET['year'])) {
                    $month = $_GET['month'];
                    $year = $_GET['year'];
                } else {
                    $month = $dateComponents['mon'];
                    $year = $dateComponents['year'];
                }

                echo build_calendar($month, $year);

                echo ladenuurvandag();
                echo ladenform() . "</div>";


                if (isset($_GET["bad"])) {
                    echo "<p style='color:red'>Je hebt een onderhoud van 1 uur aangevraagd maar, er is maar slecht een half
                    uur vrij.</p>";
                }

                ?>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="js/agenda2.js?2"></script>
    </div>
</body>

</html>