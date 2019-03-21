<?php include("Connexion.php"); ?>


<?php
$conn=mysqli_connect('localhost','root','','Univoit') or die (mysqli_error());
$req="SELECT points FROM Utilisateur WHERE idUtilisateur LIKE \"".$_POST['idUtilisateur']."\"";
$res=mysqli_query ($conn,$req);
?>






<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF8" />
<link rel="stylesheet" media="screen" href="Style.css">
</head>
<body  background=" .jpg">

<h1> Univoit’ </h1>

<nav>
 <ul>
         <ul>
                 <li> <a href="accueil.php">Accueil</a> </li>
                 <li> <a href="rechercher.php">Rechercher un trajet</a> </li>
                 <li> <a href="proposer.php">Proposer un trajet</a> </li>
                 <ul>
                        <li> <a href="profil.php">Profil</a>     
                        <ul>
                                <li> <a href="profil.php">Mon profil</a> </li>
                                <li> <a href="trajets.php">Mes trajets</a> </li>
                                <li> <a href="points.php">Mes points</a> </li>
                                <li> <a href="messagerie.php">Messagerie</a> </li>
                        </ul>
                        </li>
                 </ul>    
         </ul> 
 </ul>
</nav>
<div>
<h2>Mes points : </h2>


 <?php while ($ET=mysqli_fetch_array($res)) {?>
<?php echo ($ET['points'])?>
 </div>




<?php }?>
</html>