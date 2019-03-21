
        <?php
        //$conn=mysqli_connect('localhost','root','','Univoit') or die (mysqli_error());
        //$req="SELECT nom, prenom, age, titre, sexe  FROM Utilisateur WHERE idutilisateur LIKE \"".$_POST['idUtilisateur']."\"";
        //$res=mysqli_query ($conn,$req);
        ?>

        <?php
        //$conn2=mysqli_connect('localhost','root','','Univoit') or die (mysqli_error());
        //$req2="SELECT nom, prenom, texteAvis, note  FROM Avis WHERE idUtilisateur LIKE \"".$_POST['idUtilisateur']."\"";
        //$res2=mysqli_query ($conn2,$req2);
        ?>

<?php 
session_start();
$id = $_SESSION['idUtilisateur']; 

if (isset ($_POST['Supprimer le compte']))
{
$supprcompte = $bdd -> execute("DELETE FROM Utilisateur WHERE (idUtilisateur='".$id."') ");
}
?>


<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF8" />
<link rel="stylesheet" media="screen" href="Style.css">
</head>
<body  background=" .jpg">

<?php include("Connexion.php"); ?>
<?php include("menu.php"); ?>
<?php include("Heure.php"); ?>



<h1> Univoit’ </h1>



<div>
 <?php while ($ET=mysqli_fetch_array($res)) {?>
<tr>
    <td><?php echo ($ET['nom'])?></td>
    <td><?php echo ($ET['prenom'])?></td>
    <td><?php echo ($ET['age'])?></td>
    <td><?php echo ($ET['sexe'])?></td>
    <td><?php echo ($ET['titre'])?></td>
</tr>
 </div>

 <input type="submit" value="Supprimer le compte"/>

</div>
<h2>Mes avis :</h2>
<tr>
    <td><?php echo ($ET['nom'])?></td>
    <td><?php echo ($ET['prenom'])?></td>
    <td><?php echo ($ET['note'])?></td>
    <td><?php echo ($ET['texte'])?></td>
</tr>
 </div>

<?php }?>

</html>