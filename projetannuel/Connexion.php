<html>
<meta charset="UTF-8">
<?php
try {
$db = 'mysql:host=localhost;dbname=univoit;charset=UTF8';
$user = 'root';
$pass = '';
$bdd = new PDO ($db, $user, $pass);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
echo "Connexion réussie !"; 
}
	catch (PDOexception $ex)
{
	die('Impossible de se connecter : '.$ex->getmessage());
}
?> 
</html>