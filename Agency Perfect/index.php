<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>One Piece Gallery</title>

    <meta name="description" content="">
    <meta name="author" content="Aslan Taleb">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">

                <div class="navbar-header">
                   
                    <a class="site-title"><span>One Piece </span>Gallery</a>
                     <p>
                            <?php
                            $mysqli = new mysqli('localhost','ztalebas0','ij5d64wq','zfl2-ztalebas0');
                            echo("Reussi ! ");
                            if ($mysqli->connect_errno)
                            {
                                // Affichage d'un message d'erreur
                                echo "Error: Problème de connexion à la BDD \n";
                                echo "Errno: " . $mysqli->connect_errno . "\n";
                                echo "Error: " . $mysqli->connect_error . "\n";
                                // Arrêt du chargement de la page
                                exit();
                                }
                                ?>          </p>
                    	
                   

                </div><!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html" data-toggle="dropdown">ACCUEIL</a></li>
                          
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">FIGURINES<i class="fa fa-caret-down hidden-xs" aria-hidden="true"></i></a>

                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                              <li><a href="portfolio.html">Figurines Luffy</a></li>
                              <li><a href="portfolio.html">Figurines Zoro</a></li>
                              <li><a href="portfolio.html">Figurines Sanji</a></li>
                              <li><a href="portfolio.html">Figurines Nami</a></li>
                              <li><a href="portfolio.html">Figurines Chopper</a></li>
                              <li><a href="portfolio.html">Figurines Nico Robin</a></li>
                              <li><a href="portfolio.html">Figurines Franky</a></li>
                              <li><a href="portfolio.html">Figurines Jinbe</a></li>
                              <li><a href="portfolio.html">Figurines Brook</a></li>
                              <li><a href="portfolio.html">Figurines Ussop</a></li>
                            </ul>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">NAVIRES<i class="fa fa-caret-down hidden-xs" aria-hidden="true"></i></a>

                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                  <li><a href="#">Pirates</a></li>
                                  <li><a href="#">Gouvernement</a></li>
                                  <li><a href="#">Autres</a></li>
                                </ul>
                        </li>
                        <li><a href="blog.html">NEWS</a></li>
                        <li><a href="contact.html">LIVRE D'OR</a></li>
                        <li><a href="#">CONNEXION</a></li>

                    </ul>

                </div>

            </div>   
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->

    <div id="hero" class="hero overlay">
        <div class="hero-content">
            
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section section-features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>FIGURINES WANO KUNI ONE PIECE</h2>
                        <p>Découvre les superbes figurines de l'arc des samouraïs à Wano Kuni avec les mugiwaras en kimono traditionnel japonais, l'empereur Kaido et Kinemon chef des Neuf Fourreaux Rouges.</p>
                    </div>
                    <div class="col-sm-7 hidden-xs">
                        <img src="assets/img/figurine-one-piece-Wano.webp" alt="";>
                    </div>
                </div>
            </div>
        </section><!-- /.section-features -->

       

      

        <section class="site-section section-portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="heading-separator">FIGURINES ONE PIECE</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-1.webp" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Monkey D Luffy</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-2.webp" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Roronoa Zoro</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-3.webp" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Vinsmoke Sanji</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-4.webp" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Portgas D Ace</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-5.webp" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Trafalgar Law</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-6.webp" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Nami</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-7.webp" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Edwar NewGate</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-8.webp" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Tony-Tony Chopper</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                </div>
            </div>
        </section><!-- /.section-portfolio -->

        

    </main><!-- /#main -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a class="site-title"><span>One Piece </span>Gallery</a>
                    <p>allez</p>
                    <p>rien a dire.</p>
                </div>
                <div class="col-lg-offset-4 col-md-3 col-sm-4 col-md-offset-2 col-sm-offset-0 col-xs-6 ">
                    <h3>nous contacter </h3>
                    <ul class="list-unstyled contact-links">
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@agencyperfect.com">info@agencyperfect.com</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+37400800000">+374 (00) 80 00 00 </a></li>
                        <li><i class="fa fa-fax" aria-hidden="true"></i><a href="+37400900000">+374 (00) 90 00 00</a></li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><p>Springfield</p></li>
                    </ul>
                </div>
                <div class="clearfix visible-xs"></div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <h3>Featured links</h3>
                    <ul class="list-unstyled">
                        <li class="active"><a href="index.html">Acceuil</a></li>
                        <li><a href="blog.html">NEWS</a></li>
                        <li><a href="portfolio.html">Porfolio</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="social-links">
                            <a class="instagram-bg" href="#"><i class="fa fa-instagram"></i></a>
                            <a class="Youtube-bg" href="#"><i class="fa fa-youtube"></i></a>
                            <a class="linkedin-bg" href="https://fr.linkedin.com/in/aslan-taleb-b55685225"><i class="fa fa-linkedin"></i></a>
                        </div><!-- /.social-links -->
                    </div>
                    <div class="col-xs-4">
                        <div class="text-right">
                            <p>&copy; One Piece Gallery</p>
                            <p>All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.copyright -->
    </footer><!-- /#footer -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="assets/js/script.js"></script>
  
</body>
</html>