<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Accueil</title>
        <link rel="stylesheet" media="screen" href="style.css">
    </head>

    <?php
    include ('Connexion.php');
        session_start();
        $id = $_SESSION['idUtilisateur']; 
        
        
    ?>


<?php

include ('ConnexionUtilisateur.php');

?>
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
                
            <h2>Univoit' : Le principe</h2>
            <p>
                Chaque jour, la plupart des étudiants se déplacent sur le campus pour pouvoir suivre sa formation. Ces trajets sont souvent soit onéreux à cause du déplacement à l’aide d’un véhicule personnel ou bien très peu pratique à cause de la localisation, l'accessibilité des réseaux de bus ou de transport en commun. 
                Il est aussi clair que chaque étudiant s’oriente au départ sur une solution de transport individuelle faute de connaître d’autres solutions de transport plus directe et plus conciliante.
                C’est notamment à cause de ce manque de visibilité que certains étudiants prennent leur voiture le matin et croisent sans le savoir le domicile personnel de collègues ou d’autres étudiants. 
                L’objectif de ce site est de mettre en relation par une interface permettant de localiser les personnes proches de vous qui effectuent un trajet de façon permanente ou chronique. De ce fait, les étudiants pourront partager un trajet avec d’autres d’un commun accord. 
            </p>
        
        
        
            <p>
                <img src="voitureaccueil.png" alt="Image de voiture" class="left"/>
            </p>
        

        
        <form method="POST" action="Accueil.php">
            <fieldset> 
                <legend><strong>Connexion</strong></legend> 
                <table>
                    <tr>
                        <td align="right">
                            <label for="idUtilisateur">Identifiant Utilisateur</label>
                        </td>
                        <td>
                            <input type="number" name="idUtilisateur" id="idUtilisateur" required/>
                        </td>
                    </tr>
        
                    <tr>
                        <td align="right">
                            <label for="idUtilisateur">Mot de passe</label>
                        </td>
                        <td>
                            <input type="password" name="Mdp" id="idUtilisateur" required/>
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
                            &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="Connexion" value="Connexion"/>
                        </td>
                    </tr>

                     <tr>
                        <td></td>
                        <td align="left">
                            &nbsp; &nbsp;&nbsp;&nbsp;
                            <a href="Inscription.php">Ou inscrit toi</a>
                        </td>
                    </tr>
            </table>  
            </fieldset> 

        </form>
        </body>

        
        <?php include ('Heure.php');?>
</html>
