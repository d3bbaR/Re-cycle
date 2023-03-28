<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Onze Merken</title>
    <link rel="stylesheet" href="css/merk.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>

<body>

    <div class="container4">
        <h2 class="text-center font-weight-bold">Fietsen</h2>
        <section class="customer-logos slider">
            <div class="slide"><img src="assets/1.png" alt="logo"></div>
            <div class="slide"><img src="assets/2.png" alt="logo"></div>
            <div class="slide"><img src="assets/3.png" alt="logo"></div>
            <div class="slide"><img src="assets/4.png" alt="logo"></div>
            <div class="slide"><img src="assets/5.png" alt="logo"></div>
            <div class="slide"><img src="assets/6.png" alt="logo"></div>
            <div class="slide"><img src="assets/7.png" alt="logo"></div>
            <div class="slide"><img src="assets/8.png" alt="logo"></div>
        </section>
    </div>



    <div class="container4">
        <h2 class="text-center font-weight-bold">Onderdelen</h2>
        <section class="customer-logos slider">
            <div class="slide"><img src="assets/9.png" alt="logo"></div>
            <div class="slide"><img src="assets/10.png" alt="logo"></div>
            <div class="slide"><img src="assets/11.png" alt="logo"></div>
            <div class="slide"><img src="assets/12.png" alt="logo"></div>
            <div class="slide"><img src="assets/13.png" alt="logo"></div>
            <div class="slide"><img src="assets/14.png" alt="logo"></div>
            <div class="slide"><img src="assets/15.png" alt="logo"></div>
            <div class="slide"><img src="assets/16.png" alt="logo"></div>
            <div class="slide"><img src="assets/17.png" alt="logo"></div>
            <div class="slide"><img src="assets/18.png" alt="logo"></div>
            <div class="slide"><img src="assets/19.png" alt="logo"></div>
            <div class="slide"><img src="assets/20.png" alt="logo"></div>
            <div class="slide"><img src="assets/21.png" alt="logo"></div>
            <div class="slide"><img src="assets/22.png" alt="logo"></div>
            <div class="slide"><img src="assets/23.png" alt="logo"></div>
        </section>
    </div>


    <script>

        $(document).ready(function () {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    setting: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    setting: {
                        slidesToShow: 3
                    }
                }]
            });
        });

    </script>

</body>

</html>