<?php $mysqli = new mysqli("localhost", "root", "", "projet_web");
                      $mysqli -> set_charset("utf8");
                      session_start();
                      $login = $_SESSION['login'];

                    $prenomi = mysqli_query($mysqli, "SELECT prenom FROM salaries WHERE mail='$login'");
                    $nomi = mysqli_query($mysqli, "SELECT nom FROM salaries WHERE mail='$login'");
                    $teli = mysqli_query($mysqli, "SELECT tel FROM salaries WHERE mail='$login'");

                    $row_nomi = mysqli_fetch_array($nomi);
                    $row_prenomi = mysqli_fetch_array($prenomi);
                    $row_teli = mysqli_fetch_array($teli);
                ?>

<html>
    <head>
        <title>Modification profil</title>
        <link rel="stylesheet" href="ajouter_salarie.css" />
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
        
    <h2>Modification de votre profil : </h2>
    </br>
    </br>
    
    <div class="ajout">
        <form action="http://localhost/projetweb/gestion_profil.php" method="POST" name="form"> 
            <center>
            <table>
                <tr>
                    <td><label for="idNom"> Nom : </label></td>
                    <td><input type="text" name="nom" id="nom" placeholder=<?php echo $row_nomi[0]?>></td>
                </tr>
                <tr>
                    <td><label for="idPrénom"> Prénom : </label></td>
                    <td><input type="text" name="prénom" id="prénom" placeholder=<?php echo $row_prenomi[0]?>></td>
                </tr>
                <tr>
                    <td><label for="idTel"> Tèl : </label></td>
                    <td><input type="text" name="tel" id="tel" placeholder=<?php echo $row_teli[0]?>></td>
                    <td></br></br></td>
                </tr>
                    <td><input type="submit" value="Envoyer" /></td>
                    <td><input type="reset" value="Réinitialliser" /></td>
                </tr>
            </table>
            </center>
        </form>
        </div>
    
    </body>
</html>