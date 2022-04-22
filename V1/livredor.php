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
                        <li><a href="galerie.php">FIGURINES<i class="fa fa-caret-down hidden-xs" aria-hidden="true"></i></a>
                        </li>
                        <li class="active"><a href="livredor.php">LIVRE D'OR</a></li>
                        <li><a href="session.php">CONNEXION</a></li>
                    </ul>
                </div>
            </div>
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->

    <div id="hero" class="hero overlay subpage-hero blog-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Livres d'or</h1>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->
    <section>
        <div class="wrapper row2">
            <section class="hoc container clear">
                <!-- ################################################################################################ -->
                <div class="sectiontitle">
                    <p class="nospace font-xs"></p>
                    <center>
                        <h3 class="heading">COMMENTAIRES</h3>
                    </center>
                </div>
                <?php
                //connexion base
                $mysqli = new mysqli('localhost', 'ztalebas0', 'ij5d64wq', 'zfl2-ztalebas0');
                if ($mysqli->connect_errno) {
                    // Affichage d'un message d'erreur
                    echo "Error: Problème de connexion à la BDD \n";
                    echo "Errno: " . $mysqli->connect_errno . "\n";
                    echo "Error: " . $mysqli->connect_error . "\n";
                    // Arrêt du chargement de la page
                    exit();
                }
                if (!$mysqli->set_charset("utf8")) {
                    printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
                    exit();
                }
                //requete d'affichage commentaire si etat 'p'
                $requete = "SELECT * FROM t_commentaire_com  JOIN t_visiteur_vis USING (vis_num) where t_com_etat = 'p';";
                $result = $mysqli->query($requete);
                if ($result == false) {
                    echo "erreur la requete a échoué";
                    echo "Errno" . $mysqli->errno . "\n";
                    echo "Error" . $mysqli->error . "\n";
                    exit();
                }
                //affichage commentaire
                echo "<table>";
                echo  "<tr>";
                echo ('<th>' . "Nom Visiteur" . '</th>');
                echo ('<th>' . "Commentaire" . '</th>');
                echo ('<th>' . "Date Publication" . '</th>');
                echo  "</tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['vis_nom'] . " " . $row['vis_prenom'] . "</td>";
                    echo "<td>" . $row['com_texte'] . "</td>";
                    echo "<td>" . $row['com_date_heure_publication'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                //Ferme la connexion avec la base MariaDB
                $mysqli->close();
                ?>
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