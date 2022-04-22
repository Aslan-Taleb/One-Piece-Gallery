<?php
session_start();
if (!isset($_SESSION['login'])) {
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

                    <a href="index.php" class="site-title"><span>One Piece </span>Gallery</a>
                </div><!-- /.navbar-header -->
                <div class="collapse navbar-collapse" id="agency-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin_acceuil.php" class="active">ACCUEIL & profil(s)</a></li>
                        <li><a href="admin_visiteurs.php">Gestion des tickets visiteurs</a></li>
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
    echo ('<th>' . "Nom" . '</th>');
    echo ('<th>' . "Prenom" . '</th>');
    echo ('<th>' . "Mail" . '</th>');
    echo ('<th>' . "Role" . '</th>');
    echo ('<th>' . "Pseudo" . '</th>');

    echo  "</tr>";
    echo  "<tr>";
    echo ('<td>' . $profile['pfl_nom'] . '</td>' . '<td>' . $profile['pfl_prenom'] . '</td>');
    echo ('<td>' . $profile['pfl_mail'] . '</td>' . '<td>' .  $profile['pfl_role'] . '</td>' . '<td>' .  $profile['cpt_pseudo'] . '</td>');
    echo  "</tr>";
    echo "</table>";
    echo "<br><br>";

    //Verification du role de l'utilisateur
    if ($_SESSION['role'] == 'A') {
        //preparation requete pour visualisation table compte/profile
        $requete_donnes = "select * from t_profil_pfl join t_compte_cpt using (cpt_pseudo);";
        $resultat_donnes = $mysqli->query($requete_donnes);

        if ($resultat_donnes == false) {
            echo "erreur la requete a échoué";
            echo "Errno" . $mysqli->errno . "\n";
            echo "Error" . $mysqli->error . "\n";
            exit();
        } else {
            $donnes = $resultat_donnes->fetch_assoc();
            echo '<h3>Il y a actuellement ' . $resultat_donnes->num_rows . ' comptes enregistrés.</h3>';
            echo "<table>";
            echo  "<tr>";
            echo ('<th>' . "Pseudo" . '</th>');
            echo ('<th>' . "Nom" . '</th>');
            echo ('<th>' . "Prenom" . '</th>');
            echo ('<th>' . "Mail" . '</th>');

            echo ('<th>' . "Role" . '</th>');
            echo ('<th>' . "Date" . '</th>');
            echo ('<th >' . "Validité" . '</th>');
            echo ('<th>' . "Activation/Desactivation" . '</th>');

            echo  "</tr>";
            $resultat_donnes = $mysqli->query($requete_donnes);

            if ($resultat_donnes == false) {
                echo "erreur la requete a échoué";
                echo "Errno" . $mysqli->errno . "\n";
                echo "Error" . $mysqli->error . "\n";
                exit();
            } else {
                $donnes = $resultat_donnes->fetch_assoc();
                while ($donnes = $resultat_donnes->fetch_assoc()) {
                    echo  "<tr>";
                    echo ('<td>' . $donnes['cpt_pseudo'] . '</td>');
                    echo ('<td>' . $donnes['pfl_nom'] . '</td>' . '<td>' . $donnes['pfl_prenom'] . '</td>' . '<td>' . $donnes['pfl_mail'] . '</td>');
                    echo ('<td>' . $donnes['pfl_role'] . '</td>');
                    echo ('<td>' . $donnes['pfl_date'] . '</td>');
                    if ($donnes['pfl_validite'] == 'A') {
                        echo ('<td color= "Green">' . $donnes['pfl_validite'] . '</td>');
                    } else {
                        echo ('<td color="Red">' . $donnes['pfl_validite'] . '</td>');
                    }
                    if ($donnes['cpt_pseudo'] != 'gEstionnaire') {
                        //Bouton 'modifier' (envoie role/validité/pseudo a  comptes_actions) 
                        echo "<td style = font-family:georgia,garamond,serif;font-size:16px;font-style:italic; color : Black>" . "<div align = center >";

                        echo "<a  href='bouton_modifier.php?role=" . $donnes['pfl_role'] . "&validité=" . $donnes['pfl_validite'] . "&pseudo=" . $donnes['cpt_pseudo'] . "'</a>";
                        if ($donnes['pfl_validite'] == 'A') {
                            echo "Desactiver</td>";
                        } else {
                            echo "Activer</td>";
                        }

                        echo  "</tr>";
                    }
                }
                echo "</table>";
            }
        }
    }
    //Formulaire Modification donnes 
    echo '<div class="row mt-50">';
    echo '<div class="col-md-8 col-md-offset-2">';
    echo '<h2 class="text-center heading-separator">Modification</h2>';
    echo '<form action="modification_action.php" method="post">';
    echo '<div class="row" id="contenu">';
    echo '<div class="col-sm-12">';
    echo '</div>';
    echo '<div class="col-sm-12 mt-20">';
    echo '<div class="form-group">';
    echo '<label for="name">Mot de passe:</label>';
    echo '<input required
            minlength="1" type="password" class="form-control" name="mdp" />';
    echo '</div>';
    echo '</div>';
    echo '<div class="col-sm-12 mt-20">';
    echo '<div class="form-group">';
    echo '<label for="name">Confirmation Mot de passe:</label>';
    echo '<input type="password" required
            minlength="1" class="form-control" name="mdp_verif" />';
    echo '</div>';
    echo '</div>';
    echo '<div class="col-sm-12">';
    echo '<div class="form-group">';
    echo '<label for="email">E-mail:</label>';
    echo '<input type="email" required
            minlength="1" class="form-control" name="mail">';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div class="text-center mt-20">';
    echo '<input class="btn btn-green" type="submit" value="Valider">';
    echo '</div>';
    echo '</form>';
    echo '</div>';
    echo '</div><!-- /.form -->';
    echo '<br> <br> <br>';
    $mysqli->close();
    ?>
    <div style="text-align: right;">
        <a class="site-title"><span>© 2022 Taleb Aslan | L2 </span></a>
    </div>
</body>

</html>