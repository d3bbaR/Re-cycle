<?php
include "PHP/conn.php";
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard </title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">

                        </span>
                        <span class="title">Re-cycle</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Admin Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Account</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Afspraken</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Catalogus</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Footer</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Iets</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Rol</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Tekst</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>


                <div class="user">
                    <img src="assets/imgs/Re-cycle.png" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->


            <!-- ================ Order Details List ================= -->


            <!-- ================= New Customers ================ -->
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Afspraken</h2>
                </div>


                <link rel="stylesheet" href="css/agenda.css?2">
                <link rel="stylesheet"
                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="css/css.css?1">
                <title>afsrpaken </title>
                </head>

                <body>
                    <?php
                    echo "<div class='agendacontainer'>";
                    include 'test.php';

                    $maand = date("m");
                    $dag = date('d');
                    ?>
                    <div class="afsprakenbevestigen">
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



                                    echo ladenklant();
                                    $x = 0;
                                    $y = 0;
                                    foreach (query($selector) as $res) {
                                        $data = $res["dagen"];
                                        $vand = date("Y-m-d");
                                        if ($data >= $vand) {
                                            if ($res["gekeurd"] == 1) {


                                                $y += 1;
                                                echo "<div id ='tbl" . $y . "'class='modal'><div class=' modal-content'><div class='flexboxtb'><p>" . $res["naam"] . "</p><p> " . $res["email"] . "</p><p> " . $res["telefoon"] . "</p><p> " . $res["type"] . "</p><p> " . $res["dagen"] . "</p><p> " . $res["uren"] . "</p>" .
                                                    "</div>.<button class ='btn' onclick ='invisiblel(" . $y . ")'>sluiten </button></div></div>";
                                                $datum = strval($res["dagen"]);
                                                $uur = $res["uren"];
                                                $str = date_create($datum);
                                                $res = date_format($str, "m");
                                                $res2 = date_format($str, "d");
                                                $dagid = $res2 - $dag;
                                                echo "<p class='inv'id ='dl" . $y . "'>" . $dagid . "</p>";
                                                echo "<p class='inv'id ='uurl" . $y . "'>" . $uur . "</p>";
                                            } else {
                                                $x += 1;

                                                echo "<div id ='tb" . $x . "'class=' modal'><div class=' modal-content'><div class='flexboxtb'><p>" . $res["naam"] . "</p><p> " . $res["email"] . "</p><p> " . $res["telefoon"] . "</p><p> " . $res["type"] . "</p><p> " . $res["dagen"] . "</p><p> " . $res["uren"] . "</p>" .
                                                    "</div><form class ='center'action='../C/accept.php' method='post'> <button name ='edit' value='" . $res["FK_geg"] . "'><i class='fa fa-check' style='color:green'></i></button></form>" .
                                                    "<form class='center' action='../C/refuse.php' method='post'> <button name ='delete' value='" . $res["FK_geg"] . "'<i class='fa fa-close' style='color:red'></i></button></form>
                    <button class ='btn' onclick ='invisible(" . $x . ")'>sluiten </button></div></div>";
                                                $datum = strval($res["dagen"]);
                                                $uur = $res["uren"];
                                                $str = date_create($datum);
                                                $res = date_format($str, "m");
                                                $res2 = date_format($str, "d");
                                                $dagid = $res2 - $dag;
                                                echo "<p class='inv' id ='d" . $x . "'>" . $dagid . "</p>";
                                                echo "<p class='inv'id ='uur" . $x . "'>" . $uur . "</p>";
                                            }
                                        }
                                    }


                                    echo "<p class='inv' id='hoeveel'>" . $x . "</p>";
                                    echo "<p class='inv' id='hoeveell'>" . $y . "</p>";
                                    ?>



                </body>
                <script src="js/afspraak.js"></script>

</html>
<!-- =========== Scripts =========  -->
<script src="js/dashboard.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>