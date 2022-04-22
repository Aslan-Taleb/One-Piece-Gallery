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
// Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères
if (!$mysqli->set_charset("utf8")) {
    printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
    exit();
}
//test pour verifier quel role peut ou non modifier Etat 
if ($_SESSION['login'] != 'gEstionnaire') {
    if ($_GET['role'] == 'O') {
        if ($_GET['validité'] == 'D') {
            $requete = "update t_profil_pfl set pfl_validite='A' where cpt_pseudo='" . $_GET['pseudo'] . "';";
            $resultat = $mysqli->query($requete);
        } else {
            $requete = "update t_profil_pfl set pfl_validite='D'  where cpt_pseudo='" . $_GET['pseudo'] . "';";
            $resultat = $mysqli->query($requete);
        }
    }
} else {
    if ($_GET['validité'] == 'D') {
        $requete = "update t_profil_pfl set pfl_validite='A' where cpt_pseudo='" . $_GET['pseudo'] . "';";
        $resultat = $mysqli->query($requete);
    } else {
        $requete = "update t_profil_pfl set pfl_validite='D'  where cpt_pseudo='" . $_GET['pseudo'] . "';";
        $resultat = $mysqli->query($requete);
    }
}
header("Location:admin_acceuil.php");
$mysqli->close();
