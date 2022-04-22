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
    <header id="masthead" class="site-header">
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
                        <li><a href="livredor.php">LIVRE D'OR</a></li>
                        <li><a href="session.php">CONNEXION</a></li>
                    </ul>
                </div>
            </div>
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->

    <div id="hero" class="hero overlay subpage-hero portfolio-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Exposant</h1>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

<?php
//connexion base
$mysqli = new mysqli('localhost','ztalebas0','ij5d64wq','zfl2-ztalebas0');
        if ($mysqli->connect_errno){
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
        //requete qui recupere ligne exposant en fonction de l'id donné
          $id=$_GET['id'] ;
          $requete_present = "select * from t_exposant_exp join t_presente_pres using(exp_id) where oeuv_code =  ".$id.";";


 $resultat1 = $mysqli->query($requete_present);
if($resultat1 == false)
	{
    echo"erreur la requete a échoué";
    echo"Errno".$mysqli->errno."\n";
    echo"Error".$mysqli->error."\n";
    exit();
    }
    else{

while ($exposant = $resultat1->fetch_assoc()) 
{
	//affichage Information Exposant
	echo '<section class="site-section subpage-site-section section-project">';
	echo '';
	echo '<div class="container">';
	echo '<div class="row">';
	echo '<div class="col-md-8">';
	echo '<div class="project-img">';
	echo '<img src=assets/img/'.$exposant['exp_image'].' class="img-res" alt="">';
	echo '</div><!-- /.project-img -->';
	echo '</div>';
	echo '<aside class="col-md-4">';
	echo '<div class="project-info">';
	echo '<h5>Description</h5>';
	echo $exposant['exp_text'];
	echo '<p class="project-description"></p>';
	echo '';
	echo '<div class="project-date-category">';
	echo 'Nom: '.$exposant['exp_nom']." ".$exposant['exp_prenom'].'';
	echo '<br><br>';
	echo 'Mail: '.$exposant['exp_email'].'';
	echo '<br><br>';
	echo '<a  color = "black" href="'.$exposant['exp_url'].'">';
	echo '<input type="button" value="Site Internet">';
	echo '</a>';
	echo '</div><!-- /.project-cat -->';
	echo '';
	echo '</div><!-- /.project-description -->';
	echo '</aside>';
	echo '</div>';
	echo '</div>';
	echo '';
	echo '</section><!-- /.section-project -->';
}

        }
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
    <script src="assets/js/script.js"></script>
  
</body>
</html>