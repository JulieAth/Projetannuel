<?php if(isset($ POST['Connexion']))
    {
        $connexionid=$_POST['idUtilisateur'];
        $connexionmdp=$_POST['Mdp'];
        $res=$bdd->query("SELECT * FROM Utilisateur WHERE idUtilisateur=\"$connexionid\" AND Mdp=\"$connexionmdp\" ");

        if($donnee =$res->fetch())
            {
                $_SESSION['idUtilisateur']=$_POST['idUtilisateur'];
                header ('Location : Rechercher.php') ;
            }
        else 
            {
                header ('Location : Accueil.php');
            }
        $res->closeCusor ();
    }
?>
