<?php
session_start();
if (!isset($_SESSION['login']))
{
    //Si la session n'est pas ouverte, redirection vers la page du formulaire
    header("Location:session.php");
}
if ($_SESSION['role'] == 'O' )
{
      header("Location:admin_acceuil.php");
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

            </div><!-- /.navbar-header -->
            <div class="collapse navbar-collapse" id="agency-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="admin_acceuil.php">ACCUEIL & profil(s)</a></li>
                    <li><a href="admin_visiteurs.php" class="active">Gestion des tickets visiteurs</a></li>
                    <li><a href="logout.php"><span>Déconnexion</span></a></li>
                </ul>
            </div>
            </div><!-- /.navbar-header -->

            </div>
        </nav><!-- /.site-navigation -->
        </div><!-- /.navbar-header -->

        </div>
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->
    <!--contenu du fichier HTML-->
    <h1>ESPACE ADMINISTRATION</h1>
    <!--Suite du contenu du fichier HTML-->
    <style>
        table,
        th,
        td {
            border: 1px solid;
            border-collapse: collapse;
            vertical-align: top;
        }

        table,
        th {
            table-layout: auto;
        }

        table {
            width: 75%;
            margin-bottom: 15px;
        }

        th,
        td {
            padding: 5px 8px;
        }

        td {
            border-width: 0 1px;
        }
    </style>
    <?php

    /* Code PHP permettant de recuperer les visiteurs avec leur commentaire. */
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

    // Visualisation du contenu des  tables  (visiteurs/commentaire)
    $requete = "select * from t_visiteur_vis left join t_commentaire_com using(vis_num);";
    $resultat = $mysqli->query($requete);
    $p = 'p';
    $c = 'c';
    //Tableau de la table visiteur et commentaire
    echo "<br><br>";
    echo "<center>";
    echo '<label ">      LES TICKETS    </label>';
    echo "<br><br>";
    echo "<table>";
    echo  "<tr>";
    echo ('<th>' . "Tickets" . '</th>');
    echo ('<th>' . "Créateur" . '</th>');
    echo ('<th>' . "Commentaire" . '</th>');
    echo ('<th>' . "Date" . '</th>');
    echo ('<th>' . "Etat commentaire" . '</th>');
    echo ('<th>' . "Supprimer Tickets" . '</th>');
    echo  "</tr>";
    while ($visiteur = $resultat->fetch_assoc()) {
        echo  "<tr>";
        echo ('<td>' . $visiteur['vis_num'] . '</td>' . '<td>' . $visiteur['cpt_pseudo'] . '</td>');
        echo ('<td>' . $visiteur['com_texte'] . '</td>' . '<td>' . $visiteur['vis_date_heure_publication'] . '</td>');
        //Bouton Cacher/Publier (envoie etat du commentaire + numero_commentaire)
        if ($visiteur['com_texte'] != '') {
            if ($visiteur['t_com_etat'] == 'p') {
            	echo "<td style = font-family:georgia,garamond,serif;font-size:16px;font-style:italic; color : green>" . "<div align = center >";
                echo "<a href='visiteurs_action.php?tickets_etat=" . $c . "&commentaire=". $visiteur['com_num']."'</a>";  
                echo "Cacher</td>";
            }
            if ($visiteur['t_com_etat'] == 'c') 
            {
                echo "<td style = font-family:georgia,garamond,serif;font-size:16px;font-style:italic; color : green>" . "<div align = center >";
                echo "<a href='visiteurs_action.php?tickets_etat=" . $p . "&commentaire=". $visiteur['com_num']."'</a>";  
        		echo "Publier</td>";
            }
        }
        else {
        echo "<td> </td>";
        }
        //Bouton Supprimer (Envoie vis_num)
        echo "<td style = font-family:georgia,garamond,serif;font-size:16px;font-style:italic; color : 'green'>" . "<div align = center >";
        echo "<a href='visiteurs_action.php?tickets=" . $visiteur['vis_num'] . "'</a>";
        echo "Supprimer</td>";
        echo  "</tr>";
    }
    echo "</table>";
    echo "</center>";
    echo '</center>';
    echo '<br>';


    $requete = "SELECT * FROM t_visiteur_vis ;";
    $resultat = $mysqli->query($requete);
    //generation clé tickets + numéro du nouveau tickets
    $tickets_ajout = ($resultat->num_rows) + 1;
    $code = rand(111111111111111, 999999999999999);
     
    $requete = "Select vis_mot_de_passe from t_visiteur_vis where vis_num = '".$tickets_ajout."';";
     $resultat = $mysqli->query($requete);
    

//Affichage clé visiteur 
     echo '<center>';
     echo "<h4>La prochaine clé Visiteur sera ".$code."</h4>";
     echo '</center>';
//bouton D'ajout de Tickets
echo '<form action="admin_visiteurs.php" method="post">';
    echo  "<div align = center>";
    echo "<a  class='btn btn-fill mb-10' value='Valider'  href='visiteurs_action.php?tickets_ajout=" . $tickets_ajout . "&mdp=" . $code . "'</a>";
    echo "Ajouter Ticket";

    ?>
    <div style="text-align: right;">
        <a class="site-title"><span>© 2022 Taleb Aslan | L2 </span></a>
    </div>
</body>

</html>