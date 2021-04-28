<?php $mysqli = new mysqli("localhost", "root", "", "projet_web");
                      $mysqli -> set_charset("utf8");
                      session_start();
                      $login = $_SESSION['login'];
                      
                      ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="acceuil.css" />
    </head>
    <body>
         <header>
            <p class="logo"> 
            <img src="img/logo_esme3.png" alt="logo esme" title="logo esme" />
            </p>
            <h1>GESTION DES CONGES</h1>
        </header>
        
        <h2>Gérer votre profil</h2>
        
        <div>
            <table border=1 width="100%">
            <thead>
                <tr>
                    <th>Adresse mail</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Tel</th>
                    <th>Fonction</th>
                    <th>Type contrat</th>
                </tr>
            </thead>
            <tbody>
                 <?php
                    $req = "SELECT * FROM salaries WHERE mail='$login'";
                    $result = $mysqli -> query($req);
                ?>
                <tr>
                    <?php while ($ligne = $result -> fetch_assoc()) { ?>
                    <td><?php echo $ligne['mail'];?></td>
                    <td><?php echo $ligne['nom'];?></td>
                    <td><?php echo $ligne['prenom'];?></td>
                    <td><?php echo $ligne['tel'];?></td>
                    <td><?php echo $ligne['fonction'];?></td>
                    <td><?php echo $ligne['type_contrat'];?></td>
                    <?php } ?>
            </tbody>
            </table></br></br>
            <a class="sid" href="http://localhost/projetweb/modification_profil.php">Modifier votre profil</a>
        </div>
        <?php 
        $prenomi = mysqli_query($mysqli, "SELECT prenom FROM salaries WHERE mail='$login'");
        $nomi = mysqli_query($mysqli, "SELECT nom FROM salaries WHERE mail='$login'");
        $teli = mysqli_query($mysqli, "SELECT tel FROM salaries WHERE mail='$login'");

        $row_nomi = mysqli_fetch_array($nomi);
        $row_prenomi = mysqli_fetch_array($prenomi);
        $row_teli = mysqli_fetch_array($teli);
        
        if(htmlspecialchars($_SERVER['HTTP_REFERER']) == "http://localhost/projetweb/modification_profil.php"){   
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prénom"]);
        $tel = htmlspecialchars($_POST["tel"]);
        
        if($nom == "") {$nom_modif = $row_nomi[0];}
        else $nom_modif = $nom;
        if($prenom == "") {$prenom_modif = $row_prenomi[0];}
        else $prenom_modif = $prenom;
        if($tel == "") {$tel_modif = $row_teli[0];}
        else $tel_modif = $tel;
        
        mysqli_query($mysqli, "UPDATE salaries SET nom='$nom_modif' WHERE mail='$login'");
        mysqli_query($mysqli, "UPDATE salaries SET prenom='$prenom_modif' WHERE mail='$login'");   
        mysqli_query($mysqli, "UPDATE salaries SET tel='$tel_modif' WHERE mail='$login'");
        }
        ?>
    </body>
    
    <footer>
        <p class="infos"> 38 Rue Molière, 94200 Ivry-sur-Seine </br> contact@esme.fr </br> 01 56 20 62 00 </p>
    </footer>
    
</html>
