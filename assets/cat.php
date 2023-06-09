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
    <link rel="stylesheet" href="css/info.css?2">
    <link href="css/cat.css?2" rel="stylesheet" />
</head>

<body>
    <?php include 'nav-bar.php'; ?>


    <div class="wrap">
        <section class="container">
            <div class="filter-box">
                <div class="select-box">
                    <div class="select-control">
                        <input type="radio" name="Category" data-value-category="all" id="radio-all"
                            class="category-control" checked>
                        <label class="radio-control" for="radio-all">Alle fietsen</label><br>
                        <?php
                        $merken = array();
                        foreach (query($type) as $dat) {
                            if (in_array($dat['Cat'], $merken)) {

                            } else {
                                array_push($merken, $dat['Cat']);
                            }

                        }

                        foreach ($merken as $merk) {
                            // echo "<script>console.log(".$merk.")</script>";
                            echo " <input type='radio' name='Category' data-value-category='" . $merk . "' id='" . $merk . "'
                            class='category-control'>
                            <label class='radio-control' for='" . $merk . "'>" . $merk . "</label><br>";
                        }

                        ?>
                    </div>
                </div>
                <!-- /.select-box -->

                <!-- /filter-box-->

                <?php
                $fietsenarray = array();
                echo "<div class='products-box grid-box'>";
                foreach (query($catalogus) as $prod) {
                    if (in_array($prod['Type'], $fietsenarray)) {

                    } else {
                        echo "<div data-category='" . $prod['Cat'] . "' value=" . $prod['Prijs'] . " " . "class='product-box__item' onclick =show(" . $prod['FietsNr'] . ")>
                    <h3 class='product-box__title'>" . $prod['Type'] . "</h3>
                    <div class='product-box__img'>
                        <img class='img-fluid' src='assets/im1-min.png'>
                    </div>
                    <div class='product-box__meta'>
                        <p>" . $prod['Prijs'] . "  €</p>

                    </div>
                </div>";
                        array_push($fietsenarray, $prod['Type']);

                    }
                }
                echo "</div>";
                /*foreach ($fietsenarray as $item) {
                    $naam .= " Type = " . '' . $item;
                    echo $naam;
                    foreach (query($naam) as $prod) {
                        echo print_r($prod);
                    }

                }*/
                foreach (query($catalogus) as $prod) {
                    echo "<div class='fietscontainer' id=" . $prod['FietsNr'] . ">
        <div class='box'>
            <div class='images'>
                <div class='img-holder active'>
                    <img src='assets/im4-min.png'>
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
                <p>Frame: " . $prod['Frame'] . "</p>
                <p>Wielmaat: " . $prod['Wielmaat'] . "</p>
                <p>Fietsmaat: " . $prod['Maat'] . "</p>
                <p>Versnellingen: " . $prod['Versnellingen'] . "</p>
                <button class='fa fa-close' onclick =hide(" . $prod['FietsNr'] . ")></button>
            </div>
        </div>
    </div>";
                }
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