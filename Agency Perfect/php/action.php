<?php
Bonjour, <?php echo htmlspecialchars($_POST['pseudo']); ?>.
MDP choisi : <?php echo htmlspecialchars($_POST['mdp']); ?> !
<?php
$id=htmlspecialchars($_POST['pseudo']);
$mdp=htmlspecialchars($_POST['mdp']);
$mysqli = new mysqli('localhost','marcva00','lnz9pv2k','z3if-marcva00');
if ($mysqli->connect_errno)
{
 // Affichage d'un message d'erreur
 echo "Error: Problème de connexion à la BDD \n";
 echo "Errno: " . $mysqli->connect_errno . "\n";
 echo "Error: " . $mysqli->connect_error . "\n";
 // Arrêt du chargement de la page
 exit();
}

echo ("Connexion BDD réussie !");
// Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères
if (!$mysqli->set_charset("utf8")) {
 printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
 exit();
}

//Préparation de la requête à partir des chaînes saisies =>
//concaténation (avec le point) des différents éléments composant la
//requête
$sql="INSERT INTO t_compte_cpt VALUES('" .$id. "','" .$mdp. "');";
// Affichage de la requête constituée pour vérification
echo($sql);
//Exécution de la requête d'ajout d'un compte dans la table des comptes
$result3 = $mysqli->query($sql);
if ($result3 == false) //Erreur lors de l’exécution de la requête
{
 // La requête a echoué
 echo "Error: La requête a échoué \n";
 echo "Query: " . $sql . "\n";
 echo "Errno: " . $mysqli->errno . "\n";
 echo "Error: " . $mysqli->error . "\n";
 exit;
}
else //Requête réussie
{
echo "<br />";
echo "Inscription réussie !" . "\n";
}

$mysqli->close();
 ?>