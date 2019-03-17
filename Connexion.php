<?php
    try
        {
            $bdd = new PDO ('mysql:host=localhost ; charset=utf8 ; bdname = Univoit', 'root', '');
        }
            catch(Exception $e)
        {
            die('Erreur : '$e->Message());
        }

        $Message='Une erreur est survenue lors de la connexion. Veuillez recommencer.';
?>
