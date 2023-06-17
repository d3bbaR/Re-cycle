<?php
include "PHP/conn.php";
include "PHP/functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://use.fontawesome.com/1a4d35d4d9.js"></script>
    <title>Re-cycle</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/Logo ICON White.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="css/info.css?3">
    <link href="css/cat.css?2" rel="stylesheet" />
</head>

<body>
    <?php include 'nav-bar.php'; ?>


    <div class="wrap">
        <section class="container">
            <div class="filter-box" id="filtertekst">
                <div class="select-box">
                    <div class="select-control">
                        <?php
                        if (isset($_COOKIE["fietssoort"])) {
                            foreach (query($type) as $dat) {
                                echo "<input type='radio' name='Category' data-value-category='" . $dat['Cat'] . "' id='" . $dat['Cat'] . "'
                                class='category-control' onclick='fietsladen(\"" . $dat['Cat'] . "\")'>
                                <label class='radio-control'id='" . $dat['Cat'] . "1' for='" . $dat['Cat'] . "'>" . $dat['Cat'] . "</label><br>";

                            }
                            echo fietsen();

                        } else {
                            $merken = array();
                            foreach (query($type) as $dat) {
                                echo "<input type='radio' name='Category' data-value-category='" . $dat['Cat'] . "' id='" . $dat['Cat'] . "'
                                class='category-control' onclick='fietsladen(\"" . $dat['Cat'] . "\")'>
                                <label class='radio-control' for='" . $dat['Cat'] . "'><img src=" . $dat['afbeelding'] . "><p>" . $dat['Cat'] . "</p></label><br>";

                            }
                        }
                        $merken = array();


                        ?>
                    </div>
                </div>
            </div>
            <div class="filter-box" id="filterimg">
                <div class="select-box">
                    <div class="select-control">

                        <?php
                        $merken = array();


                        ?>
                    </div>
                </div>
            </div>


            <!-- /.select-box -->

            <!-- /filter-box-->

            <?php


            function fietsen()
            {
                $catalogus = "SELECT * FROM miniemen_baftech.catalogus where Cat ='" . $_COOKIE["fietssoort"] . "'";

                $fietsenarray = array();
                $translate = array(
                    'Kinderfietsen ' => 'Kinderfietsen',
                    'Stadsfietsen ' => 'Stadsfietsen',
                    'Mountainbikes ' => 'Mountainbikes',
                    'Racefietsen ' => 'Racefietsen',
                    'Hybride fietsen ' => 'Hybride fietsen',
                    'Stadsfietsen (elo)' => 'Stadsfietsen elektris',
                    'Mountainbikes (elo)' => 'Mountainbikes elektris',
                    'Racefietsen (elo)' => 'Racefietsen elektris',
                    'Hybride fietsen (elo)' => 'Hybride fietsen elektris',

                );
                echo "<div class='products-box grid-box'>";
                foreach (query($catalogus) as $prod) {


                    if (in_array($prod['Type'], $fietsenarray)) {


                    } else {

                        echo "<div data-category='" . $translate[$prod['Cat']] . "' value=" . $prod['Prijs'] . " " . "class='product-box__item' onclick ='show(\"" . $prod['Type'] . "\")'>
                    <h3 class='product-box__title'>" . $prod['Type'] . "</h3>
                    <div class='product-box__img'>
                        <img class='img-fluid' src='" . $prod["foto"] . "'>
                    </div>
                    <div class='product-box__meta'>
                        <p>" . $prod['Prijs'] . "  €</p>

                    </div>
                </div>";
                        array_push($fietsenarray, $prod['Type']);

                    }
                }
                foreach ($fietsenarray as $item) {
                    $naam = "SELECT * from catalogus where";
                    $naam .= " Type =   '" . $item . "'";
                    $maten = "";
                    $aanwezig = 0;
                    foreach (query($naam) as $prod) {
                        $aanwezig += 1;
                        $maten .= $prod['Maat'] . "/";
                    }
                    $maten = substr($maten, 0, -1);

                    echo "<div class='fietscontainer' id='" . $prod['Type'] . "'>
            <div class='box'>
                <div class='images'>
                    <div class='img-holder active'>
                        <img src='" . $prod["foto"] . "'>
                    </div>
                    <span>" . $prod['Prijs'] . "</span>
                </div>
                <div class='asic-info'>
                    <h1>" . $prod['Type'] . "</h1>
                    
                    
                    
                </div>
                <div class='description'>
                    <p>Merk: " . $prod['Merk'] . "</p>
                    <p>Soort fiets: " . $prod['Cat'] . "</p>
                    <p>Kleur: " . $prod['Kleur'] . "</p>
                    <p>Fietsmaat: " . $maten . "</p>
                    <p>Exemplaren aanwezig: " . $aanwezig . "</p>
                    <button class='fa fa-close' onclick ='hide(\"" . $prod['Type'] . "\")'></button>
                </div>
            </div>
        </div>";


                }
            }

            //}
            




            ?>





            <!-- /product-box-->

        </section>
    </div>

    <footer class="bottom-footer bg-beetroot py-1">
        <div class="container">
        </div>
    </footer>
    </div>



    <script src="js/filter.js?4"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>