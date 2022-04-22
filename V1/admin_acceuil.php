<?php
session_start();
if (!isset($_SESSION['login']))
{
    //Si la session n'est pas ouverte, redirection vers la page du formulaire
    header("Location:session.php");

}
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
//Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères
if (!$mysqli->set_charset("utf8")) {
    printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
    exit();
}
?>

<html>

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
    <!--entête du fichier HTML-->
</head>

<body>
    <header id="masthead" class="site-header site-header-white">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">
                <div class="navbar-header">

                    <a href = "index.php" class="site-title"><span>One Piece </span>Gallery</a>
                </div><!-- /.navbar-header -->
                <div class="collapse navbar-collapse" id="agency-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin_acceuil.php" class="active">ACCUEIL & profil(s)</a></li>
                        <li><a href="admin_acceuil.php">Gestion des tickets visiteurs</a></li>
                        <li><a href="logout.php"><span>Déconnexion</span></a></li>
                    </ul>
                </div>
            </div><!-- /.navbar-header -->

            </div>
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->

    <?php

    /* Code PHP permettant de souhaiter la bienvenue à l’utilisateur connecté et
d’afficher le détail de son profil. */
    $requete = "SELECT * FROM t_profil_pfl where cpt_pseudo= '" . $_SESSION['login'] . "';";

    // Visualisation du contenu d'une table (profile)
    $resultat = $mysqli->query($requete);
    if ($resultat == false) {
                echo "erreur la requete a échoué";
                echo "Errno" . $mysqli->errno . "\n";
                echo "Error" . $mysqli->error . "\n";
                exit();
            }
    $profile = $resultat->fetch_assoc();
    // Visualisation du contenu d'une table (profile) dans un tableau
    echo '<br> <br>';
    echo '<center>';
    echo '<br> <br>';
    echo ('<h2>' . "Bienvenue " . $profile['cpt_pseudo'] . '</h2>');

    echo "<table>";
    echo  "<tr>";
    echo ('<th>' . "pfl_nom" . '</th>');
    echo ('<th>' . "pfl_prenom" . '</th>');
    echo ('<th>' . "pfl_mail" . '</th>');
    echo ('<th>' . "pfl_role" . '</th>');
    echo ('<th>' . "cpt_pseudo" . '</th>');
    echo  "</tr>";
    echo  "<tr>";
    echo ('<td>' . $profile['pfl_nom'] . '</td>' . '<td>' . $profile['pfl_prenom'] . '</td>');
    echo ('<td>' . $profile['pfl_mail'] . '</td>' . '<td>' .  $profile['pfl_role'] . '</td>' . '<td>' .  $profile['cpt_pseudo'] . '</td>');
    echo  "</tr>";
    echo "</table>";
    echo "<br><br>";
?>