<!DOCTYPE html>
<html>
        <head>
                <meta charset="UTF8" />
                <title>Rechercher un trajet </title>
                <link rel="stylesheet" media="screen" href="style.css">
        </head>

        <?php
                session_start();
                $id = $_SESSION['idUtilisateur']; 
                include ('Connexion.php');
                include ('menu.php');
                include ('Heure.php');
                // NECESSAIRE LA LIGNE EN DESSOUS CAR MIS DANS LE REQUETE DYNAMIQUE //
                //$query=$bdd->prepare("SELECT Pointdedepartlatitude, Pointdedepartlongitude, DateDepart, HeureDepart FROM Trajet WHERE idTrajet");
                //$query->bindValue(':id',$id, PDO::PARAM_STR);
                //$query->execute();
                //$data=$query->fetch();
            
                if (isset ($_POST['Rechercher']))
                $deplong=$_POST("Pointdedepartlongitude");
                $deplat=$_POST("Pointdedepartlatitude");
                $arrlong=$_POST("Pointdarriveelongitude");
                $arrlat=$_POST("Pointdarriveelatitude");
                $recherche = $bdd -> query ("SELECT Pointdedepartlatitude, Pointdedepartlongitude, Pointdarriveelatitude, Pointdarriveelongitude, PrixPersonne , DateArrivee, HeureArrivee, DateDepart, HeureDepart, NbreBagageMax 
                FROM Trajet WHERE Pointdedepartlatitude <= ($deplat+5) AND Pointdedepartlatitude >= ($deplat-5) AND Pointdedepartlongitude <= ($deplong+5) AND Pointdedepartlongitude >= ($deplong-5) ");
                $donnees=$recherche->fetchAll();
        ?>
                        
        <body>
                <form method="POST" action="Rechercher.php">
                        <fieldset> 
                                <legend><strong>Rechercher un trajet</strong></legend>
                                <table>  
                                        <tr>      
                                                <td align="right">  
                                                        <label for="idTrajet">Coordonnées GPS de départ : latitude </label>
                                                </td>
                                                <td>
                                                        <input type="number" name="Pointdedepartlatitude" id="idTrajet" min="-90.0" max="90.0" maxlength="5" required/>
                                                </td>
                                        </tr>

                                        </tr> 
                                                <td align="right">
                                                        <label for="idTrajet">Coordonnées GPS de départ : longitude</label>
                                                </td>
                                                <td>
                                                        <input type="number" name="Pointdedepartlongitude" id="idTrajet" min="-90.0" max="90.0" maxlength="5" required/>
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

                                        </tr> 
                                                <td align="right">
                                                        <label for="idTrajet">Coordonnées GPS d'arrivée' : longitude</label>
                                                </td>
                                                <td>
                                                        <input type="number" name="Pointdarriveelongitude" id="idTrajet" min="-90.0" max="90.0" maxlength="5" required/>
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
                                                <input type="submit" value="Rechercher"/>
                                        </tr>
                                </table> 
                        </fieldset>     
                </form>

        <table border="1" width="900" height="180">
                <thead><tr><th>Pointdedepartlatitude</th><th>Pointdedepartlongitude</th><th>DateDepart</th><th>HeureDepart</th></tr></thead>
                <?php foreach ($donneesALL as $donnees) { ?>
                <tr>
                        <td><?php echo $donnees['Pointdedepartlatitude']; ?></td>
                        <td><?php echo $donnees['Pointdedepartlongitude']; ?></td>
                        <td><?php echo $donnees['Pointdarriveelatitude']; ?></td>
                        <td><?php echo $donnees['Pointdarriveelongitude']; ?></td>
                        <td><?php echo $donnees['DateDepart']; ?></td>
                        <td><?php echo $donnees['HeureDepart']; ?></td>
                        <td><?php echo $donnees['DateArrivee']; ?></td>
                        <td><?php echo $donnees['HeureArrivee']; ?></td>
                        <td><?php echo $donnees['PrixPersonne']; ?></td>
                        <td><?php echo $donnees['NbreBagageMax']; ?></td>
                        <td><a href="Inscriptiontrajet.php?idTrajet=<?php echo $donnees['idTrajet'];?>">S'inscrire à ce trajet</a></td>
                </tr>
                <?php } ?> 
        </table>        

        </body>
</html>
