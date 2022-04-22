
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>One Piece Gallery</title>

    <meta name="description" content="">
    <meta name="author" content="">
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

    <header id="masthead" class="site-header site-header-white">
    <nav id="primary-navigation" class="site-navigation">
            <div class="container">

                <div class="navbar-header">

                    <a class="site-title"><span>One Piece </span>Gallery</a>
                </div><!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">ACCUEIL</a></li>
                        <li ><a href="galerie.php" >FIGURINES<i class="fa fa-caret-down hidden-xs" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="livredor.php">LIVRE D'OR</a></li>
                        <li class="active"><a href="session.php">CONNEXION</a></li>
                    </ul>
                </div>
            </div>
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->

    <div id="hero" class="hero overlay subpage-hero contact-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Connexion</h1>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">
        <!--Formulaire Connexion-->
<div class="row mt-50">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-center heading-separator">Connexion</h2>
                        <form action="session_action.php" method="post">
                            <div class="row" id="contenu">
                            <div class="col-sm-12">
                                    <div class="form-group">
                                      <label ">Pseudo:</label>
                                      <input type="text" class="form-control" name="pseudo" />
                                    </div>
                                <div class="col-sm-12 mt-20">
                                    <div class="form-group">
                                      <label for="name">Mot de passe:</label>
                                      <input type="password" class="form-control" name="mdp" />
                                    </div>
                                </div>
                                <div class="col-sm-12">
                            </div>
                            <div class="text-center mt-20">
                                <input class="btn btn-green" type="submit" value="Valider">
                            </div>
                            <!--Bouton si pas de compte-->
                            <a href="inscription.php" style = "font-size:16px;font-style:italic; color : black">PAS DE COMPTE ?</a>
                        </form>
                    </div>
                </div><!-- /.form -->
                <br> <br> <br>
    </main><!-- /#main -->

</main><!-- /#main -->

<div style="text-align: right;">
        <a class="site-title"><span>© 2022 Taleb Aslan | L2 </span></a>
        </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
    <script src="assets/js/script.js"></script>
  
</body>
</html>