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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/cat.css" rel="stylesheet"/>
    </head>
    <body>

        <header>
            <section class="navigation">
                <div class="nav-container">
                    <div class="brand">
                        <img class="logonav" alt="Logo" src="assets/Re-cycle.png">
                    </div>
                    <nav>
                        <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                        <ul class="nav-list">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="#">Afspraken</a>
                            </li>
                            <li>
                                <a href="#">Nieuw</a>
                            </li>
                            <li>
                                <a href="#">Cadeau ideeën</a>
                            </li>
                            <li>
                                <a href="#">Tweedehands Fietsen</a>
                            </li>
                            <li>
                                <a href="#">More</a>
                            </li>
                            <li>
                                <a href="index.html"><img class="taalpic" alt="Logo" src="assets/user-interface.png"></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
          
        </header>


        <div class="wrap">
            <section class="container">
                <div class="filter-box">
                    <div class="select-box">
                        <div class="select-control">
                            <input type="radio" name="Category" data-value-category="all" id="radio-all" class="category-control" checked>
                            <label class="radio-control" for="radio-all">Alle fietsen</label><br>
                            <input type="radio" name="Category" data-value-category="road" id="radio-road" class="category-control">
                            <label class="radio-control" for="radio-road">Trekkingfietsen</label><br>
                            <input type="radio" name="Category" data-value-category="mountain" id="radio-mountain" class="category-control">
                            <label class="radio-control" for="radio-mountain">Mountainbikes</label><br>
                            <input type="radio" name="Category" data-value-category="bmx" id="radio-bmx" class="category-control">
                            <label class="radio-control" for="radio-bmx">BMX</label><br>
                        </div>

                    </div>
                    <!-- /.select-box -->
                    <div class="price-select-box">
                        <input type="range" min="0" max="3870" value="2850" class="price-control" data-filter='price'>
                        <span class="price-value">Prijs tot <span class="price-value__item">3870</span>€</span>
                    </div>
                </div>
                <!-- /filter-box-->



                <div class="products-box grid-box">

                    <div data-category='road' value="2850" class="product-box__item">
                        <h3 class="product-box__title">Cano One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="assets/im1-min.png">
                        </div>
                        <div class="product-box__meta">
                            <p>2850 €</p>

                        </div>
                    </div>


                    <div data-category='bmx' value="1620" class="product-box__item">
                        <h3 class="product-box__title">Predator</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="assets/im12-min.png">
                        </div>
                        <div class="product-box__meta">
                            <p>1620 €</p>

                        </div>
                    </div>

                    <div data-category='mountain' value="780" class="product-box__item">
                        <h3 class="product-box__title">Canyon</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="assets/im2-min.png">
                        </div>
                        <div class="product-box__meta">
                            <p>780 €</p>

                        </div>
                    </div>
                    <div data-category='road' value="1100" class="product-box__item">
                        <h3 class="product-box__title">Coselo</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="assets/im3-min.png">
                        </div>
                        <div class="product-box__meta">
                            <p>1100 €</p>

                        </div>
                    </div>
                    <div data-category='mountain' value="450" class="product-box__item">
                        <h3 class="product-box__title">Gt Cube</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="assets/im4-min.png">
                        </div>
                        <div class="product-box__meta">
                            <p>450 €</p>

                        </div>
                    </div>
                    <div data-category='road' value="600" class="product-box__item">
                        <h3 class="product-box__title">Cube Axeal</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="assets/im5-min.png">
                        </div>
                        <div class="product-box__meta">
                            <p>600 €</p>

                        </div>
                    </div>
                    <div data-category='mountain' value="320" class="product-box__item">
                        <h3 class="product-box__title">Gt 3000</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="assets/im7-min.png">
                        </div>
                        <div class="product-box__meta">
                            <p>320 €</p>

                        </div>
                    </div>
                    <div data-category='mountain' value="500" class="product-box__item">
                        <h3 class="product-box__title">Gt One</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="assets/im8-min.png">
                        </div>
                        <div class="product-box__meta">
                            <p>500 €</p>

                        </div>
                    </div>
                    <div data-category='bmx' value="2200" class="product-box__item">
                        <h3 class="product-box__title">Gt Perfomer</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="assets/im9-min.png">
                        </div>
                        <div class="product-box__meta">
                            <p>2200 €</p>

                        </div>
                    </div>
                    <div data-category='mountain' value="1250" class="product-box__item">
                        <h3 class="product-box__title">Haibike</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="assets/im10-min.png">
                        </div>
                        <div class="product-box__meta">
                            <p>1250 €</p>

                        </div>
                    </div>
                    <div data-category='bmx' value="1350" class="product-box__item">
                        <h3 class="product-box__title">Kenda XL</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="assets/im11-min.png">
                        </div>
                        <div class="product-box__meta">
                            <p>1350 €</p>

                        </div>
                    </div>


                    <div data-category='road' value="1900" class="product-box__item">
                        <h3 class="product-box__title">Forme Long</h3>
                        <div class="product-box__img">
                            <img class="img-fluid" src="assets/im6-min.png">
                        </div>
                        <div class="product-box__meta">
                            <p>1900 €</p>

                        </div>
                    </div>


                </div>
                <!-- /product-box-->

            </section>
        </div>

        <footer class="bottom-footer bg-beetroot py-1">
            <div class="container">
            </div>
        </footer>
    </div>
 


    <script src="js/filter.js"></script>
    <script src="js/cart.js"></script>
    <script src="js/test.js"></script>

   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
