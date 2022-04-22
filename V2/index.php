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
</head>

<body>
    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">

                <div class="navbar-header">

                    <a class="site-title"><span>One Piece </span>Gallery</a>
                </div><!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php" data-toggle="dropdown">ACCUEIL</a></li>
                        <li class="dropdown"><a href="galerie.php" class="dropdown-toggle" data-toggle="dropdown">FIGURINES<i class="fa fa-caret-down hidden-xs" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="livredor.php">LIVRE D'OR</a></li>
                        <li><a href="session.php">CONNEXION</a></li>
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
        <br><br>
        <section>
            <?php
            //connexion Base
            $mysqli = new mysqli('localhost', 'ztalebas0', 'ij5d64wq', 'zfl2-ztalebas0');
            if ($mysqli->connect_errno) {
                // Affichage d'un message d'erreur
                echo "Error: Problème de connexion à la BDD \n";
                echo "Errno: " . $mysqli->connect_errno . "\n";
                echo "Error: " . $mysqli->connect_error . "\n";
                // Arrêt du chargement de la page
                exit();
            }
            // Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères
            if (!$mysqli->set_charset("utf8")) {
                printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
                exit();
            }
            // Visualisation du contenu d'une table (config)
            $requete = "SELECT * FROM t_configuration_config;";
            $resultat = $mysqli->query($requete);
            if ($resultat == false) {
                echo "erreur la requete a échoué";
                echo "Errno" . $mysqli->errno . "\n";
                echo "Error" . $mysqli->error . "\n";
                exit();
            } else {
                //affichage Information  Configuration
                $config = $resultat->fetch_assoc();
                echo ('<center>');
                echo ('<h1>' . $config['config_texte_bienvenue'] . '</h1>');
                echo ('<p style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic; color : black">' .  $config['config_presentation'] . '</p>');
                echo ('<p style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic; color : black" >' . "Date Debut : " .  $config['config_date_debut'] . '</p>');
                echo ('<p style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic; color : black">' . "Lieu : " . $config['config_lieu'] . '</p>');
                echo ('<p style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic; color : black">' . "Date Vernissage : " .  $config['config_date_vernissage'] . '</p>');
                echo ('<p style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic; color : black">' . $config['config_texte_bienvenue'] . '</p>');
                echo '<div class="text-center mt-20">';
                echo '<a href = galerie.php> <input class="btn btn-gray" type="submit" value="Visiter ! "> </a>';
                echo '</div>';
                echo ('</center>');
            }
            ?>
        </section>

        <section>
            <br><br><br>
            <center>
                <h2>DERNIÈRES ACTUALITÉS</h2>

                <?php
                // Visualisation du contenu d'une table (actu)
                $requete = "SELECT * FROM t_news_new;";
                $resultat = $mysqli->query($requete);
                if ($resultat == false) {
                    echo "erreur la requete a échoué";
                    echo "Errno" . $mysqli->errno . "\n";
                    echo "Error" . $mysqli->error . "\n";
                    exit();
                } else {
                    //affichage Actualité
                    echo "<table>";
                    echo  "<tr>";
                    echo ('<th>' . "Titre" . '</th>');
                    echo ('<th>' . "News" . '</th>');
                    echo ('<th>' . "Date News" . '</th>');
                    echo  "</tr>";
                    while ($actu = $resultat->fetch_assoc()) {
                        echo  "<tr>";
                        echo ('<td>' . $actu['new_titre'] . '</td>' . '<td>' . $actu['new_texte'] . '</td>');
                        echo ('<td>' . $actu['new_date']);
                        echo  "</tr>";
                    }
                    echo "</table>";
                }
                $mysqli->close();
                ?>
            </center>
        </section>
        <br><br><br>
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
    <script src="assets/js/script.js"></script>

</body>

</html>