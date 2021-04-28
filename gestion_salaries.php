<?php $mysqli = new mysqli("localhost", "root", "", "projet_web");
                      $mysqli -> set_charset("utf8");
                      $nbChamps = 100;             
                      session_start();
        
        /*echo 'Nom : '.htmlspecialchars($_POST["nom"]).'<br>';
        echo 'Prénom : ' .htmlspecialchars($_POST["prénom"]).'<br>';
        echo 'Mail : ' .htmlspecialchars($_POST["mail"]).'<br>';
        echo 'Tèl : ' .htmlspecialchars($_POST["tel"]).'<br>';
        echo 'Fonction : ' .htmlspecialchars($_POST["fonction"]).'<br>';
        echo 'Type de contrat : ' .htmlspecialchars($_POST["typecontrat"]).'<br>';
        echo 'Date d embauche : ' .htmlspecialchars($_POST["date_embauche"]).'<br>';
        echo 'Nombre de congés restant RTT : ' .htmlspecialchars($_POST["rtt"]).'<br>';
        echo 'Nombre de congés restant non payés : ' .htmlspecialchars($_POST["rttnp"]).'<br>';*/
        if(htmlspecialchars($_SERVER['HTTP_REFERER']) == "http://localhost/projetweb/ajouter_salarie.php"){    
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prénom"]);
        $mail = htmlspecialchars($_POST["mail"]);
        $tel = htmlspecialchars($_POST["tel"]);
        $fonction = htmlspecialchars($_POST["fonction"]);
        $type_contrat = htmlspecialchars($_POST["typecontrat"]);
        $date_embauche = htmlspecialchars($_POST["date_embauche"]);
        $conges_restant_RTT = htmlspecialchars($_POST["rtt"]);
        $conges_restant_non_payes = htmlspecialchars($_POST["rttnp"]);
        }
        
        if(htmlspecialchars($_SERVER['HTTP_REFERER']) == "http://localhost/projetweb/ajouter_salarie.php" && ($nom == "" || $prenom == "" || $mail == "" || $tel == "" || $fonction == "" || 
                                                                                                              $type_contrat == "" || $date_embauche == "" || $conges_restant_RTT == "" || 
                                                                                                              $conges_restant_non_payes =="")){
            header("location: http://localhost/projetweb/Erreur.php");
        }
      
        if(htmlspecialchars($_SERVER['HTTP_REFERER']) == "http://localhost/projetweb/ajouter_salarie.php"){
        mysqli_query($mysqli, "INSERT INTO salaries (nom, prenom, mail, tel, fonction, type_contrat, date_embauche, conges_restant_RTT, conges_restant_non_payes)
              VALUES ('$nom', '$prenom', '$mail','$tel', '$fonction', '$type_contrat', '$date_embauche', '$conges_restant_RTT', '$conges_restant_non_payes') ")
                
        or die( mysqli_error()); }
        ?>

<html>
    <head>
        <title>Gestion salariés</title>
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
        
    <h2>Gestion salariés</h2></br></br>
    
    <a href="ajouter_salarie.php">Ajouter un salarié</a></br></br>
    
    <table border=1 width="100%">
            <thead>
                <tr>
                    <th>Adresse mail</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Fonction</th>
                    <th>Type contrat</th>
                    <th>Modification</th>
                    <th>Suppression</th>
                </tr>
            </thead>
            
            <tbody>      
                <?php for($i=1; $i<$nbChamps; $i++) {
                    $req = "SELECT * FROM salaries WHERE id_type = $i";
                    $result = $mysqli -> query($req);
                ?>
                <tr>
                    <?php while ($ligne = $result -> fetch_assoc()) { ?>
                    <td><?php echo $ligne['mail'];?></td>
                    <td><?php echo $ligne['nom'];?></td>
                    <td><?php echo $ligne['prenom'];?></td>
                    <td><?php echo $ligne['fonction'];?></td>
                    <td><?php echo $ligne['type_contrat'];?></td>
                    <td><a href="modification.php?i=<?=$i?>"> modification</td>
 
                    <?php
                        $nomi = mysqli_query($mysqli, "SELECT nom FROM salaries WHERE id_type=$i");
                        $prenomi = mysqli_query($mysqli, "SELECT prenom FROM salaries WHERE id_type=$i");
                        $maili = mysqli_query($mysqli, "SELECT mail FROM salaries WHERE id_type=$i");
                        $teli = mysqli_query($mysqli, "SELECT tel FROM salaries WHERE id_type=$i");
                        $fonctioni = mysqli_query($mysqli, "SELECT fonction FROM salaries WHERE id_type=$i");
                        $type_contrati = mysqli_query($mysqli, "SELECT type_contrat FROM salaries WHERE id_type=$i");
                        $date_embauchei = mysqli_query($mysqli, "SELECT date_embauche FROM salaries WHERE id_type=$i");
                        $conges_restant_RTTi = mysqli_query($mysqli, "SELECT conges_restant_RTT FROM salaries WHERE id_type=$i");
                        $conges_restant_non_payesi = mysqli_query($mysqli, "SELECT conges_restant_non_payes FROM salaries WHERE id_type=$i");

                        $row_nomi = mysqli_fetch_array($nomi);
                        $row_prenomi = mysqli_fetch_array($prenomi);
                        $row_maili = mysqli_fetch_array($maili);
                        $row_teli = mysqli_fetch_array($teli);
                        $row_fonctioni = mysqli_fetch_array($fonctioni);
                        $row_type_contrati = mysqli_fetch_array($type_contrati);
                        $row_date_embauchei = mysqli_fetch_array($date_embauchei);
                        $row_conges_restant_RTTi = mysqli_fetch_array($conges_restant_RTTi);
                        $row_conges_restant_non_payesi = mysqli_fetch_array($conges_restant_non_payesi);  
                        
                    /*if (htmlspecialchars($_SERVER['HTTP_REFERER']) == "http://localhost/projetweb/modification.php?i=<?=$i?>"){*/
                        $nom2 = htmlspecialchars($_POST["nom"]);
                        $prenom2 = htmlspecialchars($_POST["prénom"]);
                        $mail2 = htmlspecialchars($_POST["mail"]);
                        $tel2 = htmlspecialchars($_POST["tel"]);
                        $fonction2 = htmlspecialchars($_POST["fonction"]);
                        $type_contrat2 = htmlspecialchars($_POST["typecontrat"]);
                        $date_embauche2 = htmlspecialchars($_POST["date_embauche"]);
                        $conges_restant_RTT2 = htmlspecialchars($_POST["rtt"]);
                        $conges_restant_non_payes2 = htmlspecialchars($_POST["rttnp"]);
                        
                        if($nom2 == "") {$nom_modif = $row_nomi[0];}
                        else $nom_modif = $nom2;
                        if($prenom2 == "") {$prenom_modif = $row_prenomi[0];}
                        else $prenom_modif = $prenom2;
                        if($mail2 == "") {$mail_modif = $row_maili[0];}
                        else $mail_modif = $mail2;
                        if($tel2 == "") {$tel_modif = $row_teli[0];}
                        else $tel_modif = $tel2;
                        if($fonction2 == "") {$fonction_modif = $row_fonctioni[0];}
                        else $fonction_modif = $fonction2;
                        if($type_contrat2 == "") {$type_contrat_modif = $row_type_contrati[0];}
                        else $type_contrat_modif = $type_contrat2;
                        if($date_embauche2 == "") {$date_embauche_modif = $row_date_embauchei[0];}
                        else $date_embauche_modif = $date_embauche2;
                        if($conges_restant_RTT2 == "") {$conges_restant_RTT_modif = $row_conges_restant_RTTi[0];}
                        else $conges_restant_RTT_modif = $conges_restant_RTT2;
                        if($conges_restant_non_payes2 == "") {$conges_restant_non_payes_modif = $row_conges_restant_non_payesi[0];}
                        else $conges_restant_non_payes_modif = $conges_restant_non_payes2;
                        
                    $num2 = $_SESSION['num2'];
                    echo $num2;
                        
                    mysqli_query($mysqli, "UPDATE salaries SET nom='$nom_modif' WHERE id_type=$num2");
                    mysqli_query($mysqli, "UPDATE salaries SET prenom='$prenom_modif' WHERE id_type=$num2");
                    mysqli_query($mysqli, "UPDATE salaries SET mail='$mail_modif' WHERE id_type=$num2");
                    mysqli_query($mysqli, "UPDATE salaries SET tel='$tel_modif' WHERE id_type=$num2");
                    mysqli_query($mysqli, "UPDATE salaries SET fonction='$fonction_modif' WHERE id_type=$num2");
                    mysqli_query($mysqli, "UPDATE salaries SET type_contrat='$type_contrat_modif' WHERE id_type=$num2");
                    mysqli_query($mysqli, "UPDATE salaries SET date_embauche='$date_embauche_modif' WHERE id_type=$num2");
                    mysqli_query($mysqli, "UPDATE salaries SET conges_restant_RTT='$conges_restant_RTT_modif' WHERE id_type=$num2");
                    mysqli_query($mysqli, "UPDATE salaries SET conges_restant_non_payes='$conges_restant_non_payes_modif' WHERE id_type=$num2");
                    //}
                    ?>
                    
                    <td><a href="suppression.php?i=<?=$i?>">suppression</td>
                    <?php }?>
                </tr>
                <?php }?>
            </tbody>
        </table>
    <?php 
        if (htmlspecialchars($_POST["choix"]=="Oui")){
        $num = $_SESSION['num'];
        mysqli_query($mysqli, "DELETE FROM `salaries` WHERE `salaries`.`id_type` = $num");
    } 
    ?>
</body>
</html>

