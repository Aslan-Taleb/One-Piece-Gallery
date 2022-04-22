<?php
//verification saisie des donnes
if ($_POST["vis_id"] and $_POST["mdp"] and $_POST["commentaire"]) 
    {
    $visiteur = htmlspecialchars($_POST['vis_id']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $commentaire = htmlspecialchars($_POST['commentaire']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['mail']);

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
    if (!$mysqli->set_charset("utf8")) 
    {
        printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
        exit();
    }
    //test visiteur + droit a mettre un com (>3 heures)
    $requete = "select vis_num from t_visiteur_vis where vis_num = '".$visiteur."' and vis_date_heure_publication <=now() AND now() <=timestampadd(hour,3,vis_date_heure_publication) and vis_mot_de_passe = '".$mdp."' ;";
        $resultat = $mysqli->query($requete);
    if ($resultat->num_rows == 1) 
    {
        $requete = "select * from t_commentaire_com where vis_num = '".$visiteur."'";
        $resultat = $mysqli->query($requete);
        //si commentaire  existe le modifier + modification donnes visiteurs
        if ($resultat->num_rows == 1) 
        {
        $requete = "update t_commentaire_com set com_texte = '" .$commentaire."' where vis_num = '".$visiteur."'";
        $resultat = $mysqli->query($requete);
         if ($resultat == false) {
                echo "erreur la requete a échoué";
                echo "Errno" . $mysqli->errno . "\n";
                echo "Error" . $mysqli->error . "\n";
                exit();
            }
        $requete2 = "update t_visiteur_vis set vis_nom = '" .$nom."',vis_prenom = '" .$prenom."',vis_mail = '" .$mail."' where vis_num = '".$visiteur."'";
        $resultat2 = $mysqli->query($requete2);
         if ($resultat2 == false) {
                echo "erreur la requete a échoué";
                echo "Errno" . $mysqli->errno . "\n";
                echo "Error" . $mysqli->error . "\n";
                exit();
            }
        header("Location:livredor.php");
        }
        	//si commentaire n'existe pas le crée + modification donnes visiteurs 
            else 
            		{
                	$requete = "INSERT INTO t_commentaire_com 
                    VALUES (NULL, now(), '".$commentaire."','p', '".$visiteur."')";
                    $resultat = $mysqli->query($requete);
                    if ($resultat == false) {
	                echo "erreur la requete a échoué";
	                echo "Errno" . $mysqli->errno . "\n";
	                echo "Error" . $mysqli->error . "\n";
	                exit();
            		}
                    $requete2 = "update t_visiteur_vis set vis_nom = '" .$nom."',vis_prenom = '" .$prenom."',vis_mail = '" .$mail."' where vis_num = '".$visiteur."'";
                    $resultat2 = $mysqli->query($requete2);
                    if ($resultat2 == false) {
		                echo "erreur la requete a échoué";
		                echo "Errno" . $mysqli->errno . "\n";
		                echo "Error" . $mysqli->error . "\n";
		                exit();
            								}
                    header("Location:livredor.php");
         			}
    }
    		else {
                    echo "<center>";
                    echo '<img src="assets/img/zoro_error.png" />';
                    echo '<br>';
                    echo ("<h3>ERROR</h3>");
                    echo "<br>";
                    echo ("<a href = 'livredor.php'>RETOUR</a>");
                    echo "</center>";
    			}
	}
	//Retour si champs non remplie
	else
	{
  	echo "<center>";
    echo '<img src="assets/img/zoro_error.png" />';
    echo '<br>';
    echo ("<p>Un des trois champs OBLIGATOIRE (Numéro visiteur/Clé ticket/commentaire) n'a pas etait saisie...</p>");
    echo "<br>";
    echo ("<a href = 'livredor.php'>RETOUR</a>");
    echo "</center>";
	}

       $mysqli->close();
?>
 <div style="text-align: right;">
        <a class="site-title"><span>© 2022 Taleb Aslan | L2 </span></a>
    </div>