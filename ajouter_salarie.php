<!DOCTYPE html>

<html>
    <head>
        <title>Ajouter salarié</title>
        <link rel="stylesheet" href="acceuil.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
         <header>
            <p class="logo"> 
            <img src="img/logo_esme3.png" alt="logo esme" title="logo esme" />
            </p>
            <h1>GESTION DES CONGES</h1>
        </header>
        
    <h2>Ajouter salarié</h2>
    </br>
    </br>
    
    <div class="ajout">
        <form action="http://localhost/projetweb/gestion_salaries.php" method="POST" name="form"> 
            <center>
            <table>
                <tr>
                    <td><label for="idNom"> Nom : </label></td>
                    <td><input type="text" name="nom" id="nom" placeholder="Entrer votre nom"/></td>
                </tr>
                <tr>
                    <td><label for="idPrénom"> Prénom : </label></td>
                    <td><input type="text" name="prénom" id="prénom" placeholder="Entrer votre prénom"/></td>
                </tr>
                <tr>
                    <td><label for="idMail"> Mail : </label></td>
                    <td><input type="text" name="mail" id="mail" placeholder="Entrer votre mail"/></td>
                </tr>
                <tr>
                    <td><label for="idTel"> Tèl : </label></td>
                    <td><input type="text" name="tel" id="tel" placeholder="Entrer votre numéro de telephone"/></td>
                    <td></br></br></td>
                </tr>
                <tr>
                <td><label for="idFonction"> Fonction : </label></td>
                    <td><label for="idBd"> Enseignant </label>
                        <input type="radio" name="fonction" id="enseignant" value="enseignant" />
                        <label for="idBd"> Personnel administratif </label>
                        <input type="radio" name="fonction" id="personnel_administratif" value="personnel administratif" /></td>
                </tr>
                <td><label for="idTypecontrat"> Type de contrat : </label></td>
                    <td><label for="idCdi"> CDI </label>
                        <input type="radio" name="typecontrat" id="cdi" value="cdi" />
                        <label for="idCdd"> CDD </label>
                        <input type="radio" name="typecontrat" id="cdd" value="cdd" /></td>
                </tr>
                <tr>
                    <td><label for="idDateembauche"> Date d'embauche : </label></td>
                    <td><input type="date" name="date_embauche" id="date_embauche"/></td>
                </tr>
                <tr>
                    <td><label for="idRtt"> Nombre de congés restant RTT : </label></td>
                    <td><input type="number" name="rtt" id="rtt"/></td>
                </tr>
                <tr>
                    <td><label for="idRttnp"> Nombre de congés restant non payés : </label></td>
                    <td><input type="number" name="rttnp" id="rttnp"/></td>
                </tr>
                <tr>  
                    <td><input type="submit" value="Envoyer" /></td>
                    <td><input type="reset" value="Réinitialliser" /></td>
                </tr>
            </table>
            </center>
        </form>
        </div>
    </body>
</html>