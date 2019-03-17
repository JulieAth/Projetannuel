<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF8" />
        <title>Proposer un trajet </title>
        <link rel="stylesheet" media="screen" href="style.css">
    </head>

    <?php
        session_start();
        $id = $_SESSION['idUtilisateur']; 
        include ('Connexion.php');
        include ('menu.php');
        include ('Heure.php'); 
        include ('Heure.php');      
        // NECESSAIRE LA LIGNE EN DESSOUS CAR MIS DANS LE REQUETE DYNAMIQUE //
        //$query=$bdd->prepare("SELECT Pointdedepartlatitude, Pointdedepartlongitude, DateDepart, HeureDepart FROM Trajet WHERE idTrajet");
        //$query->bindValue(':id',$id, PDO::PARAM_STR);
        //$query->execute();
        //$data=$query->fetch();
        if (isset ($_POST['Proposer']))
        {
            $voiture = $bdd->query("SELECT idVehicule FROM Vehicule JOIN Utilisateur USING (idUtilisateur) WHERE idUtilisateur='".$id."'");
          
            if (empty($voiture))
            {echo 'Désolé. Vous ne pouvez pas proposer un trajet sans enregistrer une voiture dans la rubrique "Profil" du menu.'}
            
            $proposer = $bdd -> exec ("INSERT INTO Trajet (Pointdedepartlatitude, Pointdedepartlongitude, Pointdarriveelatitude, Pointdarriveelongitude, PrixPersonne , DateArrivee, HeureArrivee, DateDepart, HeureDepart, NbreBagageMax)
            VALUES ('".$_POST['Pointdedepartlatitude']."', '".$_POST['Pointdedepartlongitude']."', '".$_POST['Pointdarriveelatitude']."', '".$_POST['Pointdarriveelongitude']."', '".$_POST['PrixPersonne']."' , '".$_POST['DateArrivee']."', '".$_POST['HeureArrivee']."', '".$_POST['DateDepart']."', '".$_POST['HeureDepart']."', '".$_POST['NbreBagageMax']."') ");
            
        }   
        $donnees=$Recherche->fetchAll();
    ?>
    
        <body>
        <form method="POST" action="Proposer.php">
            <fieldset> 
                <legend><strong>Proposer un trajet</strong></legend>  
                <table>
                    <tr>
                        <td align="right">
                            <label for="idTrajet">Coordonnées GPS de départ : latitude </label>
                        </td>
                        <td>
                            <input type="number" name="Pointdedepartlatitude" id="idTrajet" min="-90.0" max="90.0" maxlength="5" required/>
                        </td>
                    </tr>

                    <tr>
                        <td align="right">
                            <label for="idTrajet">Coordonnées GPS de départ : longitude</label>
                        </td>
                        <td>
                            <input type="number" name="Pointdedepartlongitude" id="idTrajet" min="-90.0" max="90.0" maxlength="5" required/>
                        </td>
                    </tr>

                    <tr>
                        <td align="right">
                            <label for="idTrajet">Date de départ</label>
                        </td>
                        <td>
                            <input type="date" name="DateDepart" id="idTrajet" placeholder="jj/mm/aaaa" required/>
                        </td>
                    </tr>

                    <tr>                            
                        <td align="right">
                            <label for="idTrajet">Heure de départ</label>
                        </td>
                        <td>
                            <input type="time" name="HeureDepart" id="idTrajet" required/>
                        </td>    
                    </tr>
                    
                    <tr>                            
                        <td align="right">
                            <label for="idTrajet">Coordonnées GPS d'arrivée : latitude </label>
                        </td>
                        <td>
                            <input type="number" name="Pointdarriveelatitude" id="idTrajet" min="-90.0" max="90.0" maxlength="5" required/>
                        </td>
                    </tr>

                    <tr>
                        <td align="right">
                            <label for="idTrajet">Coordonnées GPS d'arrivée : longitude</label>
                        </td>
                        <td>
                            <input type="number" name="Pointdarriveelongitude" id="idTrajet" min="-90.0" max="90.0" maxlength="5" required/>
                        </td>
                    </tr>

                    <tr>
                        <td align="right">
                            <label for="idTrajet">Date d'arrivée</label>
                        </td>
                        <td>
                            <input type="date" name="DateArrivee" id="idTrajet" placeholder="jj/mm/aaaa" required/>
                        </td>
                    </tr>
                           
                    <tr>
                        <td align="right">
                            <label for="idTrajet">Heure d'arrivée</label>
                        </td>
                        <td>
                            <input type="time" name="HeureArrivee" id="idTrajet" required/>
                        </td> 
                    </tr>
                    
                    <tr>                      
                        <td align="right">
                            <label for="idTrajet">Nombre de bagages maximum d'une taille de 20 litres que peut contenir le véhicule:</label>
                        </td>
                        <td>
                            <input type="number" name="NbreBagageMax" id="idTrajet" required/>
                        </td>
                    </tr>

                    <tr>                      
                        <td align="right">
                            <label for="idTrajet">Prix par personne :</label>
                        </td>
                        <td>
                            <input type="number" name="PrixPersonne" id="idTrajet" required/>
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
                        <input type="submit" value="Proposer"/>
                        </td>
                    </tr>
                    </table> 
               </fieldset>     
       </form>

    </body>
</html>
