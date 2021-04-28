<!DOCTYPE html>

<html>
    <head>
        <title>Authentification</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="authentification.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
         <header>
            <p class="logo"> 
            <img src="img/logo_esme3.png" alt="logo esme" title="logo esme" />
            </p>
            <h1>GESTION DES CONGES</h1>
        </header>
        
        <h2>Acceuil</h2>
        
        <div class="authen">
            <form action="http://localhost/projetweb/menu.php" method="POST" name="form"> 
            <center>
            <table>
                <tr>
                    <td><label for="idprofil"> Profil : </label></td>
                    <td><label for="salarie"> Salarié </label>
                        <input type="radio" name="profil" id="salarie" value="salarie" />
                        <label for="directeur"> Directeur </label>
                        <input type="radio" name="profil" id="directeur" value="directeur" /></td>
                </tr>
                <tr>
                    <td><label for="login"> Login : </label></td>
                    <td><input type="text" name="login" id="login" placeholder="Entrer votre mail"/></td>
                </tr>
                <tr>
                    <td><label for="mdp"> Mot de passe : </label></td>
                    <td><input type="text" name="mdp" id="mdp" placeholder="Entrer votre mot de passe"/></td>
                    <td></br></br></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Envoyer" /></td>
                    <td><input type="reset" value="Réinitialliser" /></td>
                </tr>
            </table>
            </center>
            </form>
        </div>
        </br>
        </br>
    </body>
</html>
