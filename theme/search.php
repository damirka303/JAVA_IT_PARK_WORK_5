<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ThemesNerd">
    <meta name="author" content="ThemesNerd">
    <title>INTERIOR : Search : Minimal Multi-purpose Furniture Store Responsive Premium Template</title>
    <link rel="icon" href="img/fabicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="css/font-face.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Animate CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <!-- Owl Carousel Assets -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style-3.css" rel="stylesheet">
    <link href="css/search.css" rel="stylesheet">
    <link rel="stylesheet" href="css/colors/default.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Modernizr -->
    <script src="js/modernizr.custom.12691.js"></script>




</head>

<body>
    <h1 class="sr-only">INTERIOR: Minimal Multi-purpose Furniture Store Responsive Premium Template</h1>
    <!-- nav-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!-- navbar-toggle btn -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /navbar-toggle btn -->
                <!-- navbar btn search -->
                <a class="btn btn-icon-only btn-nav navbar-toggle" data-toggle="collapse" data-target=".form-wrap"><i class="fa fa-search"></i></a>
                <!-- /navbar btn search -->
                <!-- logo -->
                <a class="navbar-brand" href="index-1.html">
                    <div class="brand-logo"><img alt="themesnerd" src="img/logo.png">
                    </div>
                </a>
                <!-- /logo -->
            </div>

            <div class="nav-bar-btn">
                <a class="btn btn-icon-only btn-nav btn-nav-desktop" data-toggle="collapse" data-target=".form-wrap"><i class="fa fa-search"></i></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index-1.html">Homepage 1</a>
                            </li>
                            <li><a href="index-2.html">Homepage 2</a>
                            </li>
                            <li><a href="index-3.html">Homepage 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="product-1.html">Product List 1</a>
                            </li>
                            <li><a href="product-2.html">Product List 2</a>
                            </li>
                            <li><a href="product-details-1.html">Product Details 1</a>
                            </li>
                            <li><a href="product-details-2.html">Product Details 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="contact-1.html">Contact 1</a>
                            </li>
                            <li><a href="contact-2.html">Contact 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="product-landing-1.html">Landing Page 1</a>
                            </li>
                            <li><a href="product-landing-2.html">Landing Page 2</a>
                            </li>
                            <li><a href="faq.html">FAQ</a>
                            </li>
                            <li><a href="404.html">404 Page</a>
                            </li>
                            <li><a href="commingsoon.html">Comming Soon</a>
                            </li>
                            <li><a href="underdev.html">Under Dev</a>
                            </li>
                            <li><a href="shortcode.html">Shortcode</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <div class="container">
            <div class="form-wrap collapse">
                <form id="form-search" role="search" action="search.php" method="post">
                    <div class="form-group">
                        <input id="form-search-input" type="text" class="form-control" name="search-input" value="type to search" onfocus="this.value='';">
                        <button type="submit"><i class="fa fa-search"></i>
                        </button>
                        <button type="reset" data-toggle="collapse" data-target=".form-wrap"><i class="fa fa-close"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- /nav-->
    <!-- Header Section -->
    <header class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4>Results For</h4>
                    <h2 class="header-title">"<?php $search = $_POST["search-input"]; echo $search; ?>"</h2>
                </div>
            </div>
        </div>
    </header>
    <!-- /Header Section -->
    <!-- Search Results -->
    <section id="search-products">
        <div class="container">
            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-4 col-sm-6 col-xs-12 mix home-decor" data-my-order="1">
                    <figure class="wow fadeIn">
                        <img class="img-responsive" src="img/product-1.jpg" alt="themesnerd">
                        <figcaption>
                            <a href="product-details-1.html">
                                <p class="product-title">Hai Chair</p>
                                <h4 class="product-price">$ 999.00</h4>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <!-- /Product 1 -->
                <!-- Product 2 -->
                <div class="col-md-4 col-sm-6 col-xs-12 mix office-decor" data-my-order="2">
                    <figure class="wow fadeIn">
                        <img class="img-responsive" src="img/product-2.jpg" alt="themesnerd">
                        <figcaption>
                            <a href="product-details-1.html">
                                <p class="product-title">Touchwood Chair</p>
                                <h4 class="product-price"><del>$ 199.99</del><span class="promo-price">$ 90.99</span></h4>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <!-- /Product 2 -->
                <!-- Product 3 -->
                <div class="col-md-4 col-sm-6 col-xs-12 mix furniture" data-my-order="3">
                    <figure class="wow fadeIn">
                        <img class="img-responsive" src="img/product-3.jpg" alt="themesnerd">
                        <figcaption>
                            <a href="product-details-1.html">
                                <p class="product-title">Drifted Chair</p>
                                <h4 class="product-price">$ 119.99</h4>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <!-- /Product 3 -->
                <!-- Product 4 -->
                <div class="col-md-4 col-sm-6 col-xs-12 mix home-decor" data-my-order="4">
                    <figure class="wow fadeIn">
                        <img class="img-responsive" src="img/product-4.jpg" alt="themesnerd">
                        <figcaption>
                            <a href="product-details-1.html">
                                <p class="product-title">Drifted Stool</p>
                                <h4 class="product-price"><del>$ 119.99</del><span class="promo-price">$ 90.99</span></h4>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <!-- /Product 4 -->
                <!-- Product 5 -->
                <div class="col-md-4 col-sm-6 col-xs-12 mix furniture" data-my-order="5">
                    <figure class="wow fadeIn">
                        <img class="img-responsive" src="img/product-5.jpg" alt="themesnerd">
                        <figcaption>
                            <a href="product-details-1.html">
                                <p class="product-title">Pocket Armchair</p>
                                <h4 class="product-price">$ 999.99</h4>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <!-- /Product 5 -->
                <!-- Product 6 -->
                <div class="col-md-4 col-sm-6 col-xs-12 mix home-decor" data-my-order="6">
                    <figure class="wow fadeIn">
                        <img class="img-responsive" src="img/product-6.jpg" alt="themesnerd">
                        <figcaption>
                            <a href="product-details-1.html">
                                <p class="product-title">Hai Ottoman</p>
                                <h4 class="product-price">$ 119.99</h4>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <!-- /Product 6 -->
                <!-- Product 7 -->
                <div class="col-md-4 col-sm-6 col-xs-12 mix office-decor" data-my-order="7">
                    <figure class="wow fadeIn">
                        <img class="img-responsive" src="img/product-7.jpg" alt="themesnerd">
                        <figcaption>
                            <a href="product-details-1.html">
                                <p class="product-title">Nendo Chair</p>
                                <h4 class="product-price"><del>$ 119.99</del><span class="promo-price">$ 90.99</span></h4>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <!-- /Product 7 -->
                <!-- Product 8 -->
                <div class="col-md-4 col-sm-6 col-xs-12 mix furniture" data-my-order="8">
                    <figure class="wow fadeIn">
                        <img class="img-responsive" src="img/product-8.jpg" alt="themesnerd">
                        <figcaption>
                            <a href="product-details-1.html">
                                <p class="product-title">Mag Container</p>
                                <h4 class="product-price"><del>$ 119.99</del><span class="promo-price">$ 90.99</span></h4>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <!-- /Product 8 -->
                <!-- Product 9 -->
                <div class="col-md-4 col-sm-6 col-xs-12 mix home-decor" data-my-order="9">
                    <figure class="wow fadeIn">
                        <img class="img-responsive" src="img/product-9.jpg" alt="themesnerd">
                        <figcaption>
                            <a href="product-details-1.html">
                                <p class="product-title">Ceramic Lamp</p>
                                <h4 class="product-price">$ 119.99</h4>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <!-- /Product 9 -->
                <!-- Product 10 -->
                <div class="col-md-4 col-sm-6 col-xs-12 mix furniture" data-my-order="10">
                    <figure class="wow fadeIn">
                        <img class="img-responsive" src="img/product-10.jpg" alt="themesnerd">
                        <figcaption>
                            <a href="product-details-1.html">
                                <p class="product-title">Bean Bag Chair</p>
                                <h4 class="product-price">$ 119.99</h4>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <!-- /Product 10 -->
                <!-- Product 11 -->
                <div class="col-md-4 col-sm-6 col-xs-12 mix home-decor" data-my-order="11">
                    <figure class="wow fadeIn">
                        <img class="img-responsive" src="img/product-11.jpg" alt="themesnerd">
                        <figcaption>
                            <a href="product-details-1.html">
                                <p class="product-title">Flashcube</p>
                                <h4 class="product-price"><del>$ 119.99</del><span class="promo-price">$ 90.99</span></h4>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <!-- /Product 11 -->
                <!-- Product 12 -->
                <div class="col-md-4 col-sm-6 col-xs-12 mix furniture" data-my-order="12">
                    <figure class="wow fadeIn">
                        <img class="img-responsive" src="img/product-12.jpg" alt="themesnerd">
                        <figcaption>
                            <a href="product-details-1.html">
                                <p class="product-title">Re.Bin</p>
                                <h4 class="product-price">$ 119.99</h4>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <!-- /Product 12 -->
                <!-- Product 13 -->
                <div class="col-md-4 col-sm-6 col-xs-12 mix home-decor" data-my-order="13">
                    <figure class="wow fadeIn">
                        <img class="img-responsive" src="img/product-13.jpg" alt="themesnerd">
                        <figcaption>
                            <a href="product-details-1.html">
                                <p class="product-title">Energy Lighting</p>
                                <h4 class="product-price"><del>$ 119.99</del><span class="promo-price">$ 90.99</span></h4>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <!-- /Product 13 -->
                <!-- Product 14 -->
                <div class="col-md-4 col-sm-6 col-xs-12 mix furniture" data-my-order="14">
                    <figure class="wow fadeIn">
                        <img class="img-responsive" src="img/product-14.jpg" alt="themesnerd">
                        <figcaption>
                            <a href="product-details-1.html">
                                <p class="product-title">Lorier Flowerpot</p>
                                <h4 class="product-price"><del>$ 119.99</del><span class="promo-price">$ 90.99</span></h4>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <!-- /Product 14 -->
            </div>
            <!-- Pagination -->
            <div class="row">
                <div aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="prev">
                            <a href="#" aria-label="Previous" class="disable">
                                <span aria-hidden="true">previous</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pagination pagination-number text-center">
                        <li class="links active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#"><i class="fa fa-ellipsis-h"></i></a>
                        </li>
                    </ul>
                    <ul class="pagination">
                        <li class="next">
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Pagination -->
        </div>
    </section>
    <!-- Search Results -->
    <!-- Related Products -->
    <section id="related-products">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-xs-10 section-heading-wrap text-left">
                    <h2 class="section-heading">Related Products</h2>
                </div>
                <div class="col-sm-4 col-xs-2 text-right">
                    <a href="product-1.html" class="btn btn-ghost hidden-xs">Explore All  <i class="fa fa-chevron-right"></i></a>
                    <a href="product-1.html" class="btn btn-ghost btn-icon-only visible-xs-block"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <figure class="wow fadeIn">
                        <img class="img-responsive" src="img/product-7.jpg" alt="themesnerd">
                        <figcaption>
                            <a href="product-details-1.html">
                                <p class="product-title">Nendo Chair</p>
                                <h4 class="product-price"><del>$ 119.99</del><span class="promo-price">$ 90.99</span></h4>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <!-- /Product 1 -->
                <!-- Product 2 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <figure class="wow fadeIn">
                        <img class="img-responsive" src="img/product-3.jpg" alt="themesnerd">
                        <figcaption>
                            <a href="product-details-1.html">
                                <p class="product-title">Drifted Chair</p>
                                <h4 class="product-price"><del>$ 119.99</del><span class="promo-price">$ 90.99</span></h4>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <!-- /Product 2 -->
                <!-- Product 3 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <figure class="wow fadeIn">
                        <img class="img-responsive" src="img/product-5.jpg" alt="themesnerd">
                        <figcaption>
                            <a href="product-details-1.html">
                                <p class="product-title">Pocket Armchair</p>
                                <h4 class="product-price">$ 119.99</h4>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <!-- /Product 3 -->
            </div>
        </div>
    </section>
    <!-- /Related Products -->

    <!-- Call to Action -->
    <section id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-3 col-sm-12">
                    <div class="header-text text-center">
                        <h5 class="product-tag sale">Sale</h5>
                        <h2 class="header-heading">80% Discount!</h2>
                        <p>Enjoy 80% discount on our beautifully hand crafted products</p>
                        <a href="product-1.html" class="btn">Explore All  <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Call to Action -->
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 footer-links">
                    <h4 class="link-title">Contact Us</h4>
                    <ul>
                        <li>
                            <h6>Head Office</h6>
                        </li>
                        <li>
                            <p>132A Bridge Road Richmond VIC
                                <br> Australia.</p>
                        </li>
                        <li>
                            <p>Talk to us on 1300 132</p>
                        </li>
                        <li><a href="mailto:example@email.com?Subject=Your%20message" target="_top">info@interior.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 footer-links">
                    <h4 class="link-title">Useful Information</h4>
                    <div class="col-xs-6 no-padding">
                        <ul class="xtra-links">
                            <li><a href="#">Resources</a>
                            </li>
                            <li><a href="#">Blog</a>
                            </li>
                            <li><a href="#">Clients</a>
                            </li>
                            <li><a href="#">Trust</a>
                            </li>
                            <li><a href="#">Career</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <ul class="xtra-links">
                            <li><a href="#">Sales terms</a>
                            </li>
                            <li><a href="#">Customer Care</a>
                            </li>
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Delivery</a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 col-sm-12 footer-links">
                    <h4 class="link-title">Let's Stay in Touch!</h4>
                    <p>Suscribe to know about our latest news, products and special offers just for suscribers.</p>
                    <p>We never send spam. You can unsubscribe at anytime.</p>
                    <form id="newsletter-signup" action="#" method="post">
                        <input class="form-control" type="text" id="email" name="subscribe-input" required="" maxlength="50" placeholder="email address">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
                <div class="clearfix"></div>
                <div class="credit">
                    <div class="col-xs-12 text-center visible-sm-block visible-xs-block">
                        <ul class="list-inline social-buttons">
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <p class="credit-text">© Copyright - INTERIOR 2016. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 text-center hidden-sm hidden-xs">
                        <ul class="list-inline social-buttons">
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <p class="brand-credit">Design & Developed by <a href="http://bit.ly/2faVHOK"><b>ThemesNerd</b></a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="js/wow.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/main.js"></script>
    <script src="js/color-switcher.js"></script>
</body>

</html>