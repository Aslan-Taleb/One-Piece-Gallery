<?php

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
    echo ("Connexion BDD réussie !\n");
    // Visualisation du contenu d'une table (configuration)

    $requete="SELECT * FROM t_configuration_config;";
    echo($requete);

    $resultat1 = $mysqli->query($requete);
    if($resultat1 == false){
        echo"erreur la requete a échoué";
        echo"Errno".$mysqli->errno."\n";
        echo"Error".$mysqli->error."\n";
        exit();
    }else{
        echo"<br />";
        echo($resultat1->num_rows);
        echo"<br />";
        while ($config = $resultat1->fetch_assoc()){
            echo ($config['config_intitule'] . ' // ' . $config['config_date_debut'] .'//'.$config['config_date_fin']);
            echo "<br />";
        }
    //On insère une ligne dans la table gérant les comptes des utilisateurs
$requete2="INSERT INTO t_compte_cpt VALUES ('tux',MD5('tux1234'));";
echo ($requete2) ;

$result2 = $mysqli->query($requete2); //Exécution de la requête
if ($result2 == false) //Erreur d’exécution de la requête
{ // La requête a echoué
 echo "Error: La requête a echoué \n";
 echo "Errno: " . $mysqli->errno . "\n";
 echo "Error: " . $mysqli->error . "\n";
 exit();
}
else //Exécution de la requête réussie
{
echo "<br />";
echo "Insertion réussie" . "\n";
echo "<br />";
}
}


    //Ferme la connexion avec la base MariaDB
    $mysqli->close();
?>