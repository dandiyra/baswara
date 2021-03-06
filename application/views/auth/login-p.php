<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page - Company Profile</title>
    <script src="https://kit.fontawesome.com/e21d2faf66.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link href="assets/main.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-default navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="home.html"><img src="./assets/img/Logo MC.png" class="logo-navbar" alt=""></a>
        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="my-1 mx-2 close" style="color: white;"><i class="fas fa-times"></i></span>
            <span class="navbar-toggler-icon" style="color: white;"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Product</a>
                    <div class="dropdown-menu">
                        <a class="btn-navbar btn-danger dropdown-item" href="bojong.html"> <img src="./assets/img/Acrylic Rods.jpeg" class="img-logo" alt="">MC Bojong</a>
                        <a class="btn-navbar btn-danger dropdown-item" href="talaga.html"> <img src="./assets/img/Acrylic Rods.jpeg" class="img-logo" alt="">MC Telaga</a>
                    </div>
                </div>
                <a href="news.html" class="nav-item nav-link">News</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company</a>
                    <div class="dropdown-menu">
                        <a href="about.html" class="btn-navbar btn-danger dropdown-item">About</a>
                        <a href="faqs.html" class="btn-navbar btn-danger dropdown-item">FAQS</a>
                    </div>
                </div>
                <a href="bisnisrelation.html" class="nav-item nav-link">Bisnis Relation</a>
                <a href="career.html" class="nav-item nav-link">Career</a>
                <a href="login.html" class="nav-item nav-link">Login</a>
                <a href="#search" class="navbar-search"><i class="fa fa-search"></i></a>
            </div>
        </div>
    </nav>

    <div id="search">
        <button type="button" class="close">??</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <div class="jumbotron jumbotron-login">
        <div class="container">
            <!-- <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem a mollitia facilis numquam
            ipsam voluptates architecto veritatis totam tempore dolores.</p> -->
        </div>
    </div>


    <!-- produk -->
    <div data-aos="fade-up" class="section-nobottom container">
        <br>
        <div class="container">
            <div class="card-deck"></div>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="CardSup">
                        <div class="photo"></div>
                        <ul class="details">
                            <li>Quality</li>
                            <li>Value</li>
                            <li>Environment & Safety</li>
                        </ul>
                        <div class="description">
                            <div class="line">
                                <h1 class="product_name">My Margacipta</h1>
                            </div>
                            <p class="summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quas quibusdam vel? Itaque nostrum officiis, architecto enim sed recusandae soluta?</p>
                            <a href="supplier.html">Sign in here</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="CardDist">
                        <div class="photo"></div>
                        <ul class="details">
                            <h4>Quality</h4>
                            <li>Value</li>
                            <li>Environment & Safety</li>
                        </ul>
                        <div class="description">
                            <div class="line">
                                <h1 class="product_name">Our Customer</h1>
                            </div>
                            <p class="summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dolores laboriosam sit earum atque tempore delectus rem, suscipit provident quas?</p>
                            <a href="distributor.html">Sign In here</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- <div class="col">
        <img src="./assets/img/sheets2.jpeg" class="produk" alt="">
    </div>
    <div class="col">
        <img src="./assets/img/Acrylic Rods.jpeg" class="produk" alt="">
    </div>
    <div class="col">
        <img src="./assets/img/sheets3.jpeg" class="produk" alt="">
    </div> -->
    <!-- <section class="section-notop advantage">
        <div class="container">
            <div class="row justify-content-center">
                <h3>
                    <strong>
                        Advantage of Our Products
                    </strong>
                </h3>
                <p class="text text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eum, voluptate soluta veritatis tempora architecto, corrupti hic sint ut animi porro a, maiores reprehenderit iusto.
                </p>
            </div>
            <div class="row advantage-column">
                <div class="col-md">
                    <h4><strong>Resilient, Easy to Handle and Fabricate</strong></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ratione similique perspiciatis quas, voluptatem illo.</p>
                </div>
                <div class="col-md">
                    <h4><strong>Superior Optical Quality</strong></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ratione similique perspiciatis quas, voluptatem illo.</p>
                </div>
                <div class="col-md">
                    <h4><strong>High End Raw Material Only ??? No Re-Grind or Recycled Raw Material</strong></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ratione similique perspiciatis quas, voluptatem illo.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <h4><strong>Strict compliance with ASTM D-4802 & L-P-391D Standards</strong></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ratione similique perspiciatis quas, voluptatem illo.</p>
                </div>
                <div class="col-md">
                    <h4><strong>Superior Thickness Tolerance Achieved Through Proprietary Production Procedures</strong></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ratione similique perspiciatis quas, voluptatem illo.</p>
                </div>
                <div class="col-md">
                    <h4><strong>Heat Thermoformable PE and Paper Masking options</strong></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ratione similique perspiciatis quas, voluptatem illo.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h4><strong>Protective Palletizing and Bracing for Safe Transport</strong></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ratione similique perspiciatis quas, voluptatem illo.</p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Footer 2 -->
    <div class="footer-dark">
        <footer>
            <div class="container">
                <class class="row">
                    <div class="col-md">

                        <a href="home.html">
                            <img src="./assets/img/Logo MC.png" alt="" />
                        </a>

                        <small>All Rights Reserved</small>
                    </div>
                    <div class="col-md">
                        <h7>Product</h7>
                        <ul>
                            <li><a href="bojong.html">MC Bojong</a></li>
                            <li><a href="talaga.html">MC Talaga</a></li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <h7>View</h7>
                        <ul>
                            <li><a href="news.html">News</a></li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <h7>Company</h7>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="faqs.html">FAQS</a></li>
                        </ul>
                        </ul>
                    </div>
                    <div class="col-md">
                        <h7>Bisnis Relation</h7>
                        <ul>
                            <li><a href="supplier.html">Supplier</a></li>
                            <li><a href="distributor.html">Distributor</a></li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <h7><a style="color: white;" href="#">Career</a></h7>
                    </div>
                    <div class="col-md">
                        <a style="color: white;" href="login.html">Login</a>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                                <ul class="list-unstyled list-inline social text-center">
                                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                                class="fa fa-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"
                                            target="_blank"><i class="fa fa-envelope"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <div class="container">
                        <ul class="copyright">
                            <p class="text-center">Copyright @2021 | Designed With by <a href="#">Spectrum Cahaya
                                    Nusantara</a></p>
                        </ul>
                    </div>
                </class>
        </footer>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="./assets/js/jquery.hislide.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script src="assets/js/main.js"></script>


        <script>
            $(".slider").owlCarousel({
                loop: true,
                items: 2,
                autoplay: true,
                autoplayTimeout: 1500, //2000ms = 2s;
                autoplayHoverPause: true,
            });

            $(window).scroll(function() {
                $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
            });

            $(".navbar-toggler").click(function() {
                $("nav").toggleClass("navbar-black");
            })

            $(document).ready(function() {
                function toggleNavbarMethod() {
                    if ($(window).width() > 768) {
                        $('.navbar .dropdown').on('mouseover', function() {
                            $('.dropdown-toggle', this).trigger('click');
                        }).on('mouseout', function() {
                            $('.dropdown-toggle', this).trigger('click').blur();
                        });
                    } else {
                        $('.navbar .dropdown').off('mouseover').off('mouseout');
                    }
                }
                toggleNavbarMethod();
                $(window).resize(toggleNavbarMethod);
            });

            $(function() {
                $('a[href="#search"]').on('click', function(event) {
                    event.preventDefault();
                    $('#search').addClass('open');
                    $('#search > form > input[type="search"]').focus();
                });

                $('#search, #search button.close').on('click keyup', function(event) {
                    if (event.target == this || event.target.className == 'close' || event.keyCode ==
                        27) {
                        $(this).removeClass('open');
                    }
                });


                //Do not include! This prevents the form from submitting for DEMO purposes only!
                $('form').submit(function(event) {
                    event.preventDefault();
                    return false;
                })
            });

            AOS.init();
        </script>
</body>

</html>