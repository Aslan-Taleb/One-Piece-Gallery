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
    echo "Error: Problème de connexion à la BDD \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    // Arrêt du chargement de la page
    exit();
}
// Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères
if (!$mysqli->set_charset("utf8")) {
    printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
    exit();
}


//Supprimer Visiteur
if ($_GET['tickets']) {
    $id = $_GET['tickets'];
    $requete = "delete from t_commentaire_com where vis_num = " . $id . ";";
    $requete2 = "delete from t_visiteur_vis where vis_num = " . $id . ";";
    $resultat = $mysqli->query($requete);
    $resultat2 = $mysqli->query($requete2);
    header("Location:admin_visiteurs.php");
}
    //Ajout Visiteur
    if ($_GET["tickets_ajout"] and $_GET["mdp"]) {
        $ticket = htmlspecialchars($_GET['tickets_ajout']);
        $mdp = htmlspecialchars($_GET['mdp']);
        $requete = "select vis_num from t_visiteur_vis where vis_num = '" . $ticket . "';";
        $resultat =   $resultat = $mysqli->query($requete);
        if ($resultat->num_rows == 1) {
            header("Location:admin_visiteurs.php");
        } else {
            $requete2 = "INSERT INTO t_visiteur_vis VALUES ('" . $ticket . "',NULL,'" . $mdp . "', now(), NULL, NULL,NULL,'" . $_SESSION['login'] . "'); ";
            $resultat2 =   $resultat = $mysqli->query($requete2);
            header("Location:admin_visiteurs.php");
        }
        header("Location:admin_visiteurs.php");
    }

//modifier etat commentaire Publier/cacher
 if ($_GET["tickets_etat"] and $_GET["commentaire"])
    {
        $ticket_etat = htmlspecialchars($_GET['tickets_etat']);
        $coms_num = htmlspecialchars($_GET['commentaire']);
        $requete = "update t_commentaire_com set t_com_etat = '" .$ticket_etat. "' where com_num = '".$coms_num."'  ;";
         $resultat = $mysqli->query($requete);
        header("Location:admin_visiteurs.php");
    } 
 $mysqli->close(); 
?>