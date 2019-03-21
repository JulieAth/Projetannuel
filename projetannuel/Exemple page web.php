<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
	<?php
        //Cette fonction prend en paramètre une chaîne de caractère correspondant à votre requête SQL.
        //Elle retourne des résultats avec un format presque identique à Mysqli donc remplaçez simplement
        //vos requêtes Mysqli par cette fonction. Si votre requête ne vous renvoie aucun résultat 
        //(INSERT, UPDATE etc...) alors n'affectez la valeur de sortie de la fonction à aucune variable.
        function RequetePDO($requete){
            try
            {
                //Remplaçez Nom_de_la_bdd par le nom de votre base de données
                $bdd = new PDO('mysql:host=localhost;
                dbname=Nom_de_la_bdd;
                charset=utf8'
                , 'root', 
                '');
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }        
            $query=$bdd->prepare($requete);
            $query->execute();
            $data=$query->fetchAll();
            $query->CloseCursor();
            return($data);
        }

        //Exemple d'appel de la fonction
        $reponse = RequetePDO("SELECT * FROM blablabla");
        foreach ($reponse as $r_ligne){
            //"Nom_du_champ" correspond au nom de la colonne dans la bdd 
            //(pour les COUNT etc... vérifiez bien le nom de la colonne sur phpmyadmin)
            echo($r_ligne["Nom_du_champ"]);
        }				
    ?>	
</body>
</html>