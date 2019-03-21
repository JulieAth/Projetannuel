 <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Inscription</title>
        <link rel="stylesheet" media="screen" href="style.css">
    </head>

    <body>
        <h1> Univoit’ </h1>
        <p>
            <img src="logosite.png" alt="logo du site" />
        </p>
        <nav>
            <ul>
                <li> <a href="Accueil.php">Accueil</a> </li>
            </ul>
        </nav>

        <?php include('Connexion.php')?>
        <?php 

        if (isset ($_POST['Inscription']))
        {       
            //$Rq="INSERT INTO Utilisateur(Nom, Prenom, Age, Sexe, Tel, Adresse, Mail, Mdp)
            //VALUES '".$_POST['Nom']."','".$_POST['Prenom']."','".$_POST['Datedenaissance']."','".$_POST['Sexe']."','".$_POST['Tel']."','".$_POST['Adresse']."','".$_POST['Email']."','".$_POST['Mdp']."' ";
            //echo $Rq;
            //$nom=$_POST['Nom'];
            //$prenom=$_POST['Prenom'];
            //$age=$_POST['Datedenaissance'];
            //$sexe=$_POST['Sexe'];
            //$tel=$_POST['Tel'];
            //$adresse=$_POST['Adresse'];
            //$mail=$_POST['Email'];
            //$mdp=$_POST['Mdp'];

            //$modele=$_POST['Modele'];
            //$marque=$_POST['Marque'];
            //$couleur=$_POST['Couleur'];

        

            
        $inscription=$bdd->prepare("INSERT INTO utilisateur(Nom, Prenom, Age, Sexe, Tel, Adresse, Mail, Mdp) VALUES (:nom, :prenom, :age, :sexe, :tel, :adresse, :mail, :mdp)");
        $inscription -> execute(array(':nom' => $_POST['Nom'], ':prenom' => $_POST['Prenom'],':age' => $_POST['Datedenaissance'],':sexe' => $_POST['Sexe'],':tel' => $_POST['Tel'],':adresse' => $_POST['Adresse'],':mail' => $_POST['Email'],':mdp' => $_POST['Mdp']));
        $id_insere=$bdd->lastInsertId();

        echo 'Votre identifiant est : '.$id_insere;


        $inscriptionv=$bdd->prepare("INSERT INTO vehicule(idUtilisateur, Modele, Marque, Couleur) VALUES (:id_insere, :modele, :marque, :couleur)");
        $inscriptionv -> execute(array(':id_insere' => $id_insere, ':modele' => $_POST['Modele'], ':marque' => $_POST['Marque'],':couleur' => $_POST['Couleur']));
        $id_inserev=$bdd->lastInsertId();

        //echo 'Voici l identifiant de votre v/éhicule'.$id_inserev;

//--------------------------------------------- 2 EME VERSION ------------------------------
        //$inscription=$bdd->prepare("INSERT INTO Utilisateur (Nom, Prenom, Age, Sexe, Tel, Adresse, Mail, Mdp) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        //$inscription -> execute([$_POST['Nom'],  $_POST['Prenom'], $_POST['Datedenaissance'], $_POST['Sexe'],$_POST['Tel'], $_POST['Adresse'], $_POST['Email'], $_POST['Mdp']]);
        //$id_insere=$bdd->lastInsertId();

        //echo 'Votre identifiant est : '.$id_insere;

//------------------------------------------------ 3 EME VERSION ------------------------------------------------------------
        //$inscriptionv=$bdd->prepare("INSERT INTO Voiture(Modele, Marque, Couleur) VALUES (?, ?, ?)");
        //$inscriptionv -> execute([$_POST['Modele'], $_POST['Marque'],$_POST['Couleur']]);
        //$id_inserev=$bdd->lastInsertId();

        //echo 'Voici l identifiant de votre v/éhicule'.$id_inserev;



        //$inscription=$bdd-> exec("INSERT INTO Utilisateur(Nom, Prenom, Age, Sexe, Tel, Adresse, Mail, Mdp)
        //VALUES '".$_POST['Nom']."','".$_POST['Prenom']."','".$_POST['Datedenaissance']."','".$_POST['Sexe']."','".$_POST['Tel']."','".$_POST['Adresse']."','".$_POST['Email']."','".$_POST['Mdp']."'");
        //$inscriptionv=$bdd-> exec("INSERT INTO Voiture(Modele, Marque, Couleur) 
        //VALUES '".$_POST['Modele']."','".$_POST['Marque']."','".$_POST['Couleur']."'");
        }
        ?>

        <form method="POST" action="Inscription.php">
            <fieldset> 
                <legend><strong>Inscription</strong></legend>   
                <table>
                    <tr>
                        <td align="right">
                            <label for="idUtilisateur">Nom</label>
                        </td>
                        <td>
                            <input type="text" name="Nom" id="idUtilisateur" maxlength="100" required/>
                        </td>
                    </tr>

                    <tr>
                        <td align="right">
                            <label for="idUtilisateur">Prénom</label> 
                        </td>
                        <td>   
                            <input type="text" name="Prenom" id="idUtilisateur" maxlength="100" required/>
                        </td>
                    </tr>
                
                    <tr>
                        <td align="right">
                            <label for="idUtilisateur">Age</label>
                        </td>
                        <td>
                            <input type="number" name="Datedenaissance" id="idUtilisateur" required/>
                        </td>
                    </tr> 
                
                    <tr>
                        <td align="right"> 
                            Sexe :
                        </td>  
                        <td>  
                            <label for="idUtilisateur">Masculin</label>                       
                            <input type="radio" name="Sexe" id="idUtilisateur"/>
                            <label for="idUtilisateur">Féminin</label>
                            <input type="radio" name="Sexe" id="idUtilisateur"/>
                        </td>    
                    </tr>

                    <tr>
                        <td align="right"> 
                            <label for="idUtilisateur">Numéro de téléphone</label>
                        </td>
                        <td>
                            <input type="tel" name="Tel" id="idUtilisateur" maxlength="10" required/>
                        </td>
                    </tr>

                    <tr>
                        <td align="right"> 
                            <label for="idUtilisateur">Adresse</label>
                        </td>
                        <td>
                            <input type="text" name="Adresse" id="idUtilisateur" maxlength="100" required/>
                        </td> 
                    </tr>

                    <tr>
                        <td align="right">  
                            <label for="idUtilisateur">Email</label>
                        </td>
                        <td>
                            <input type="email" name="Email" id="idUtilisateur" required/>
                        </td> 
                    </tr>

                    <tr>
                        <td align="right">
                            <label for="idUtilisateur">Mot de Passe</label>
                        </td>
                        <td>
                            <input type="password" name="Mdp" id="idUtilisateur" maxlength="100" required/>
                        </td>
                    </tr>

                <tr>
                    <td align="right">
                        <label for="idVehicule">Modèle de voiture</label>
                    </td>
                    <td>
                        <input type="text" name="Modele" id="idVehicule"/>
                    </td>
                </tr>

                <tr>
                    <td align="right">
                        <label for="idVehicule">Marque de voiture</label>
                    </td>
                    <td>
                        <input type="text" name="Marque" id="idVehicule"/>
                    </td>
                </tr>

                <tr>
                    <td align="right">
                        <label for="idVehicule">Couleur de voiture</label>
                    </td>
                    <td>
                        <input type="text" name="Couleur" id="idVehicule"/>
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                </tr>
    
                <tr>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td align="left">
                        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" name="Inscription" value="Inscription">
                    </td>
                </tr>
            </table>
            </fieldset>     
        </form>
        <?php include ('Heure.php');?>
   </body>
</html>