

<?php
//$conn=mysqli_connect('localhost','root','','Univoit') or die (mysqli_error());
//$req="SELECT nom, prenom, DateDepart, HeureDepart, NombreBagage, PointDepart, PointArrivee FROM Trajet WHERE idUtilisateur LIKE \"".$_POST['idUtilisateur']."\"";
//$res=mysqli_query ($conn,$req);
?>

<?php
//$date = date("d-m-Y");
//$heure = date("H:i");
//Print("Nous sommes le $date et il est $heure");
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

<h2>Mes trajets : </h2>

<div id="Gauche">
  <p>
    <br>
    <br>

<h3>- Trajets prevus</h3>
<br>

<?php if ($ET['DateDepart'] > $date)
  while ($ET=mysqli_fetch_array($res)) {?>
<tr>
    <td><?php echo ($ET['nom'])?></td>
    <td><?php echo ($ET['prenom'])?></td>
    <td><?php echo ($ET['DateDepart'])?></td>
    <td><?php echo ($ET['HeureDepart'])?></td>
    <td><?php echo ($ET['NombreBagage'])?></td>
    <td><?php echo ($ET['PointDepart'])?></td>
    <td><?php echo ($ET['PointArrivee'])?></td>
</tr>

<?php }?>
<br> 
   </p>
</div>

<h3>- Trajets effectues</h3>
  <br>

<div id="Milieu">

 <?php if ($ET['DateDepart'] <= $date)
  while ($ET=mysqli_fetch_array($res)) {?>
<tr>
    <td><?php echo ($ET['nom'])?></td>
    <td><?php echo ($ET['prenom'])?></td>
    <td><?php echo ($ET['DateDepart'])?></td>
    <td><?php echo ($ET['HeureDepart'])?></td>
    <td><?php echo ($ET['NombreBagage'])?></td>
    <td><?php echo ($ET['PointDepart'])?></td>
    <td><?php echo ($ET['PointArrivee'])?></td>
</tr>

</div>


<?php }?>