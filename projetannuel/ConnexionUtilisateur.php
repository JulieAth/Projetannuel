<html>
<meta charset='UTF-8'>

<?php


if(isset($_POST['Connexion']))
    {
        $connexionid=$_POST['idUtilisateur'];
        $connexionmdp=$_POST['Mdp'];
        $res=$bdd->query("SELECT * FROM utilisateur WHERE idUtilisateur=\"$connexionid\" AND Mdp=\"$connexionmdp\" ");
        if($donnee =$res->fetch())
            {
                $_SESSION['idUtilisateur']=$_POST['idUtilisateur'];
                header ('Location : rechercher.php');
            }
        else 
            {
                header ('Location : Accueil.php');
            }
        $res->closeCusor ();
    }
?>
</html>