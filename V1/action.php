
                <?php
                //verification que tous les champs ont etait saisie 
                if ($_POST["pseudo"] and $_POST["mdp"] and $_POST["mdp_verif"] and $_POST["nom"] and $_POST["prenom"] and $_POST["mail"])
                {
                $id = htmlspecialchars($_POST['pseudo']);
                $mdp = htmlspecialchars($_POST['mdp']);
                $mdp_verif = htmlspecialchars($_POST['mdp_verif']);
                $nom = htmlspecialchars($_POST['nom']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $mail =  htmlspecialchars($_POST['mail']);

                    if (strcmp($mdp, $mdp_verif) != 0) 
                    {
                           echo "<center>";
                            echo '<img src="assets/img/zoro_error.png" />';
                            echo '<br>';
                            echo ("<h3>Mot de passe Different</h3>");
                            echo "<br>";
                            echo ("<a href = 'inscription.php'>RETOUR</a>");
                            echo "</center>";
                    } 
                    else 
                    {
                    	//connexion a la base
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
                        //preparation des requetes d'insertions dans compte / profile
                        $insert_compte = "INSERT INTO t_compte_cpt VALUES('" . $id . "',md5('" . $mdp . "'))";
                        $insert_profile = "INSERT INTO t_profil_pfl VALUES('" . $nom . "','" . $prenom . "','" . $mail . "','O','D',current_date,'" . $id . "');";
                        //Exécution des requêtes d'ajout d'un compte dans la table des comptes/visiteurs
                        $result_compte = $mysqli->query($insert_compte);
                        $result_profile = $mysqli->query($insert_profile);
                        if ($result_compte == false) //Erreur lors de l’exécution de la requête
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
                                echo ("<h3>Erreur Information Compte</h3>");
                                echo "<br>";
                                echo ("<a href = 'inscription.php'>RETOUR</a>");
                                echo "</center>";
                        }
                        else if ($result_profile == false) {
                            // La requête a echoué
                            echo "Error: La requête a échoué \n";
                            echo "Query: " . $sql . "\n";
                            echo "Errno: " . $mysqli->errno . "\n";
                            echo "Error: " . $mysqli->error . "\n";
                            echo "<br>";
                            echo "<br>";
                            //requete de suppression de compte en cas d'erreur
                            $delete = "DELETE from t_compte_cpt where cpt_pseudo = '" . $id . "'";
                            echo ($delete);
                            $result_delete = $mysqli->query($delete);
                                echo "<center>";
                                echo '<img src="assets/img/zoro_error.png" />';
                                echo '<br>';
                                echo ("<h3>Erreur Profil (Compte va etre supprimer)</h3>");
                                echo "<br>";
                                echo ("<a href = 'inscription.php'>RETOUR</a>");
                                echo "</center>";
                        } 
                        else {
                        	//Retour
                            echo "<center>";
                                echo '<img src="assets/img/zoro_error.png" />';
                                echo '<br>';
                                echo ("<h3>Inscription réussie</h3>");
                                echo "<br>";
                                echo ("<a href = 'session.php'>Se Connecter</a>");
                                echo "</center>";
                        }
            }
        }
        else 
    {
    	//Retour
      echo "<center>";
    echo '<img src="assets/img/zoro_error.png" />';
    echo '<br>';
    echo ("<p>Un des  champs n'a pas etait saisie...</p>");
    echo "<br>";
    echo ("<a href = 'inscription.php'>RETOUR</a>");
    echo "</center>";
               
        }
         ?>
            </center>
        </section>
        <div style="text-align: right;">
            <a class="site-title"><span>© 2022 Taleb Aslan | L2 </span></a>
        </div>



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
