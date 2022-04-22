<?php
session_start();
//verification si champs saisie
if ($_POST["pseudo"] && $_POST["mdp"])
        {
        $id=htmlspecialchars($_POST['pseudo']);
        $mdp=htmlspecialchars($_POST['mdp']);
//connexion base
$mysqli = new mysqli('localhost','ztalebas0','ij5d64wq','zfl2-ztalebas0');
if ($mysqli->connect_errno)
{
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

//Verification du pseudo/mot de passe + compte actif ou non
$requete = "select * from t_compte_cpt join t_profil_pfl using(cpt_pseudo) 
where  cpt_pseudo='".$id."' and cpt_mot_de_passe= md5('".$mdp."') and pfl_validite='A';";
$resultat = $mysqli->query($requete);
$reponse = $resultat->fetch_assoc();
if($resultat->num_rows == 1){
    $_SESSION['login'] = $id;
    $_SESSION['role'] = $reponse["pfl_role"];
    header("Location:admin_acceuil.php");
}
else 
{
    //Retour a session
    echo "<center>";
    echo '<img src="assets/img/zoro_error.png" />';
    echo '<br>';
    echo ("<p>Pseudo ou mot de passe incorrect(ou Votre compte est Désactivé)..</p>");
    echo "<br>";
    echo ("<a href = 'session.php'>RETOUR</a>");
    echo "</center>";
}
}
else 
{
    //retour formulaire si champs non saisie
      echo "<center>";
    echo '<img src="assets/img/zoro_error.png" />';
    echo '<br>';
    echo ("<p>Un des deux champs n'a pas etait saisie...</p>");
    echo "<br>";
    echo ("<a href = 'session.php'>RETOUR</a>");
    echo "</center>";
}
 $mysqli->close();
?>
<div style="text-align: right;">
        <a class="site-title"><span>© 2022 Taleb Aslan | L2 </span></a>
        </div>
</center>
</section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
    <script src="assets/js/script.js"></script>