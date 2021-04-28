<?php $mysqli = new mysqli("localhost", "root", "", "projet_web");
                      $mysqli -> set_charset("utf8");
                      session_start();
                      
$num=$_GET['i'];
$_SESSION['num2'] = $num;

                    $nomi = mysqli_query($mysqli, "SELECT nom FROM salaries WHERE id_type=$num");
                    $prenomi = mysqli_query($mysqli, "SELECT prenom FROM salaries WHERE id_type=$num");
                    $maili = mysqli_query($mysqli, "SELECT mail FROM salaries WHERE id_type=$num");
                    $teli = mysqli_query($mysqli, "SELECT tel FROM salaries WHERE id_type=$num");
                    $fonctioni = mysqli_query($mysqli, "SELECT fonction FROM salaries WHERE id_type=$num");
                    $type_contrati = mysqli_query($mysqli, "SELECT type_contrat FROM salaries WHERE id_type=$num");
                    $date_embauchei = mysqli_query($mysqli, "SELECT date_embauche FROM salaries WHERE id_type=$num");
                    $conges_restant_RTTi = mysqli_query($mysqli, "SELECT conges_restant_RTT FROM salaries WHERE id_type=$num");
                    $conges_restant_non_payesi = mysqli_query($mysqli, "SELECT conges_restant_non_payes FROM salaries WHERE id_type=$num");

                    $row_nomi = mysqli_fetch_array($nomi);
                    $row_prenomi = mysqli_fetch_array($prenomi);
                    $row_maili = mysqli_fetch_array($maili);
                    $row_teli = mysqli_fetch_array($teli);
                    $row_fonctioni = mysqli_fetch_array($fonctioni);
                    $row_type_contrati = mysqli_fetch_array($type_contrati);
                    $row_date_embauchei = mysqli_fetch_array($date_embauchei);
                    $row_conges_restant_RTTi = mysqli_fetch_array($conges_restant_RTTi);
                    $row_conges_restant_non_payesi = mysqli_fetch_array($conges_restant_non_payesi);
                ?>

<html>
    <head>
        <title>Modification salarié <?php echo $num ?></title>
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
        
    <h2>Modification salarié <?php echo $num ?></h2>
    </br>
    </br>
    
    <div class="ajout">
        <form action="http://localhost/projetweb/gestion_salaries.php" method="POST" name="form"> 
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
                    <td><label for="idMail"> Mail : </label></td>
                    <td><input type="text" name="mail" id="mail" placeholder=<?php echo $row_maili[0]?>></td>
                </tr>
                <tr>
                    <td><label for="idTel"> Tèl : </label></td>
                    <td><input type="text" name="tel" id="tel" placeholder=<?php echo $row_teli[0]?>></td>
                    <td></br></br></td>
                </tr>
                <tr>
                <td><label for="idFonction"> Fonction : </label></td>
                    <td><label for="idBd"> Enseignant </label>
                        <input type="radio" name="fonction" id="enseignant" value="enseignant">
                        <label for="idBd"> Personnel administratif </label>
                        <input type="radio" name="fonction" id="personnel_administratif" value="personnel administratif"></td>
                </tr>
                <td><label for="idTypecontrat"> Type de contrat : </label></td>
                    <td><label for="idCdi"> CDI </label>
                        <input type="radio" name="typecontrat" id="cdi" value="cdi">
                        <label for="idCdd"> CDD </label>
                        <input type="radio" name="typecontrat" id="cdd" value="cdd"></td>
                </tr>
                <tr>
                    <td><label for="idDateembauche"> Date d'embauche : </label></td>
                    <td><input type="date" name="date_embauche" id="date_embauche" placeholder=<?php echo $row_date_embauchei[0]?>><td>
                </tr>
                <tr>
                    <td><label for="idRtt"> Nombre de congés restant RTT : </label></td>
                    <td><input type="number" name="rtt" id="rtt" placeholder=<?php echo $row_conges_restant_RTTi[0]?>></td>
                </tr>
                <tr>
                    <td><label for="idRttnp"> Nombre de congés restant non payés : </label></td>
                    <td><input type="number" name="rttnp" id="rttnp" placeholder=<?php echo $row_conges_restant_non_payesi[0]?>></td>
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