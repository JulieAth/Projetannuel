<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF8" />
        <title>Inscription</title>
        <link rel="stylesheet" media="screen" href="style.css">
    </head>

    <body>
        <h1> Univoit’ </h1>
        <p>
            <img src="logosite.png" alt="logo du site" />
        </p>
        <nav>
            <ul>
                <li> <a href="accueil.php">Accueil</a> </li>
            </ul>
        </nav>

        <form method="POST" action="Inscription.php">
            <fieldset> 
                <legend><strong>Inscription</strong></legend>   
                <table>
                    <tr>
                        <td align="right">
                            <label for="idUtilisateur">Nom</label>
                        </td>
                        <td>
                            <input type="text" name="Nom" id="idUtilisateur" maxlength="100" required/>
                        </td>
                    </tr>

                    <tr>
                        <td align="right">
                            <label for="idUtilisateur">Prénom</label> 
                        </td>
                        <td>   
                            <input type="text" name="Premon" id="idUtilisateur" maxlength="100" required/>
                        </td>
                    </tr>
                
                    <tr>
                        <td align="right">
                            <label for="idUtilisateur">Age</label>
                        </td>
                        <td>
                            <input type="number" name="Datedenaissance" id="idUtilisateur" required/>
                        </td>
                    </tr> 
                
                    <tr>
                        <td align="right"> 
                            Sexe :
                        </td>  
                        <td>  
                            <label for="idUtilisateur">Masculin</label>                       
                            <input type="radio" name="Sexe" id="idUtilisateur"/>
                            <label for="idUtilisateur">Féminin</label>
                            <input type="radio" name="Sexe" id="idUtilisateur"/>
                        </td>    
                    </tr>

                    <tr>
                        <td align="right"> 
                            <label for="idUtilisateur">Numéro de téléphone</label>
                        </td>
                        <td>
                            <input type="tel" name="Tel" id="idUtilisateur" maxlength="10" required/>
                        </td>
                    </tr>

                    <tr>
                        <td align="right"> 
                            <label for="idUtilisateur">Adresse</label>
                        </td>
                        <td>
                            <input type="text" name="Adresse" id="idUtilisateur" maxlength="100" required/>
                        </td> 
                    </tr>

                    <tr>
                        <td align="right">  
                            <label for="idUtilisateur">Email</label>
                        </td>
                        <td>
                            <input type="email" name="Email" id="idUtilisateur" required/>
                        </td> 
                    </tr>

                    <tr>
                        <td align="right">
                            <label for="idUtilisateur">Mot de Passe</label>
                        </td>
                        <td>
                            <input type="password" name="Mdp" id="idUtilisateur" maxlength="100" required/>
                        </td>
                    </tr>

                <tr>
                    <td align="right">
                        <label for="idVehicule">Modèle de voiture</label>
                    </td>
                    <td>
                        <input type="text" name="Modele" id="idVehicule"/>
                    </td>
                </tr>

                <tr>
                    <td align="right">
                        <label for="idVehicule">Marque de voiture</label>
                    </td>
                    <td>
                        <input type="text" name="Marque" id="idVehicule"/>
                    </td>
                </tr>

                <tr>
                    <td align="right">
                        <label for="idVehicule">Couleur de voiture</label>
                    </td>
                    <td>
                        <input type="text" name="Couleur" id="idVehicule"/>
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
                </tr>

                <tr>
                    <td></td>
                    <td align="left">
                        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" value="Inscription"/>
                    </td>
                </tr>
            </table>
            </fieldset>     
        </form>
   </body>
</html>
