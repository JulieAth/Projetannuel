<!DOCTYPE html>
<html>
        <head>
                <meta charset="UTF8" />
                <title>Inscription à un trajet </title>
                <link rel="stylesheet" media="screen" href="style.css">
        </head>

        <?php
                session_start();
                $id = $_SESSION['idUtilisateur']; 
                include ('Connexion.php');
                include ('menu.php');
               
                // NECESSAIRE LA LIGNE EN DESSOUS CAR MIS DANS LE REQUETE DYNAMIQUE //
                //$query=$bdd->prepare("SELECT Pointdedepartlatitude, Pointdedepartlongitude, DateDepart, HeureDepart FROM Trajet WHERE idTrajet");
                //$query->bindValue(':id',$id, PDO::PARAM_STR);
                //$query->execute();
                //$data=$query->fetch();
                
                if (isset ($_POST['Valider']))
                {
                $idTrajet = $_GET['idTrajet'];
                $verificationdoubleinscr = $bdd -> exec("SELECT idUtilisateur FROM Trajet WHERE idUtilisateur LIKE '".$idTrajet."'");
                if ($verificationdoubleinscr = NULL)
                {
                echo 'Si une seconde personne veut s\'inscrire sur ce trajet, elle doit se créer un compte.'
                }             
                
                $nbrebagageMax = $bdd -> exec("SELECT NbreBagageMax FROM Trajet WHERE idTrajet LIKE '".$idTrajet."'");
                //$valider= $bdd -> exec("UPDATE Trajet(NbreBagage) VALUES ('$nbrebagage')" );
                $nbrebagage=$_POST['NbreBagage'];
                $ajoutbagage = $bdd -> exec("UPDATE Trajet SET NbreBagage='$nbrebagagemax'-'$nbrebagage' WHERE idTrajet LIKE '".$idTrajet."'");
                $inscrtrajet = $bdd -> exec("INSERT INTO Passager(idUtilisateur, idTrajet) VALUES ('$id', '$idTrajet')");
                }
        ?>

        <body>
                <form method="POST" action="Inscriptiontrajet.php">
                         <fieldset> 
                                <legend><strong>Inscription à un trajet</strong></legend>   
                                        <table>   
                                                <tr>
                                                        <td align="right">    
                                                                <label for="idTrajet">Nombre de bagages (20 Litres/bagages) </label>
                                                        </td>
                                                        <td> 
                                                                <input type="number" name="NbreBagage" id="idTrajet" required/>
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
                                                        <td align="left">
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <input type="submit" value="Valider"/>
                                                        </td>
                                                </tr>
                                        </table>  
                        </fieldset>     
                </form>
        </body>
</html>