<?php
session_start();
if (!isset($_SESSION['login']))
{
    //Si la session n'est pas ouverte, redirection vers la page du formulaire
    header("Location:session.php");
}
//verification champs saisie
 if ($_POST["mdp"] and $_POST["mdp_verif"] and $_POST["nom"] and $_POST["prenom"] and $_POST["mail"])
    {
    $id=$_SESSION['login'];
    $mdp=htmlspecialchars($_POST['mdp']);
    $mdp_verif = htmlspecialchars($_POST['mdp_verif']);
    $nom =htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail =  htmlspecialchars($_POST['mail']);
    //verification Mot de passe et Mot de passe verifié 
    if (strcmp($mdp,$mdp_verif) != 0)
    {
                echo "<center>";
                echo '<img src="assets/img/zoro_error.png" />';
                echo '<br>';
                echo ("<h3>Mot de passe Different</h3>");
                echo "<br>";
                echo ("<a href = 'admin_acceuil.php'>RETOUR</a>");
                echo "</center>";
    }
    else 
    {
        //connexion Base
    $mysqli = new mysqli('localhost', 'ztalebas0', 'ij5d64wq', 'zfl2-ztalebas0');
    if ($mysqli->connect_errno)
    {
        // Affichage d'un message d'erreur
        echo "Error: Problème de connexion à la BDD \n";
        echo "Errno: " . $mysqli->connect_errno . "\n";
        echo "Error: " . $mysqli->connect_error . "\n";
        // Arrêt du chargement de la page
        exit();
    }
    echo ('<br>');
    // Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères
    if (!$mysqli->set_charset("utf8")) {
        printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
        exit();
    }

    else{
        //requete modifiation Profile
        $requete = "update t_profil_pfl set pfl_nom = '".$nom."' , pfl_prenom = '".$prenom."' , pfl_mail = '".$mail."' where cpt_pseudo = '" .$id."';";
        $resultat = $mysqli->query($requete);
        //requete modifiation Compte
        $requete2 = "update t_compte_cpt set cpt_mot_de_passe = MD5('".$mdp."') where cpt_pseudo = '".$id."';";
        $resultat2 = $mysqli->query($requete2);

                         if ($resultat == false || $resultat2 == false) //Erreur lors de l’exécution de la requête
                        {
                            // La requête a echoué
                                echo "Error: La requête a échoué \n";
                                echo "Query: " . $sql . "\n";
                                echo "Errno: " . $mysqli->errno . "\n";
                                echo "Error: " . $mysqli->error . "\n";
                                echo "<br>";
                                echo "<center>";
                                echo '<img src="assets/img/zoro_error.png" />';
                                echo '<br>';
                                echo ("<h3>Erreur Information</h3>");
                                echo "<br>";
                                echo ("<a href = 'admin_acceuil.php'>RETOUR</a>");
                                echo "</center>";
                        }
                        else {
                                header("Location:admin_acceuil.php");
                        }
    }
}

}
else {
        echo "<center>";
    echo '<img src="assets/img/zoro_error.png" />';
    echo '<br>';
    echo ("<p>Un des champs n'a pas etait saisie...</p>");
    echo "<br>";
    echo ("<a href = 'admin_acceuil.php'>RETOUR</a>");
    echo "</center>";
}
$mysqli->close();
?>