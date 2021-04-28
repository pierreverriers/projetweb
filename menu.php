<?php session_start()?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="menu.css" />
    </head>
    <body>
         <header>
            <p class="logo"> 
            <img src="img/logo_esme3.png" alt="logo esme" title="logo esme" />
            </p>
            <h1>GESTION DES CONGES</h1>
        </header>
        
        <h2>Acceuil</h2>
        
        <div>
            <center>
        <?php
        if(htmlspecialchars($_POST["profil"]) == "directeur"){
            echo "Enregistrer en temps qu'administrateur".'<br>';
            echo 'profil : '.htmlspecialchars($_POST["profil"]).'<br>';
            echo 'mail : ' .htmlspecialchars($_POST["login"]).'<br>';
            echo 'mdp : ' .htmlspecialchars($_POST["mdp"]).'<br>';
            echo '</br>';
            ?>
            <a class="sid" href="http://localhost/projetweb/acceuil.html">Acceuil</a></br></br>
            <a class="sid" href="http://localhost/projetweb/gestion_salaries.php">Gérer salariés</a></br></br>
            <a class="sid" href="http://localhost/projetweb/ajouter_salarie.php">Ajouter salariés</a></br></br>
            <a class="sid" href="http://localhost/projetweb/gestion_conges.php">Gérer congés</a></br></br>
        <?php }
        else {
            echo "Enregistrer en temps que salarié".'<br>';
            echo 'profil : '.htmlspecialchars($_POST["profil"]).'<br>';
            echo 'mail : ' .htmlspecialchars($_POST["login"]).'<br>';
            $login = htmlspecialchars($_POST["login"]);
            /*A MODIFIER*/if($login == ""){
                header("location: http://localhost/projetweb/Erreur.php");
            }
            $_SESSION['login'] = $login;
            echo 'mdp : ' .htmlspecialchars($_POST["mdp"]).'<br>';
            echo '</br>';
            ?>
            <a class="sid" href="http://localhost/projetweb/acceuil.html">Acceuil</a>
            <a class="sid" href="http://localhost/projetweb/ajouter_commentaires.php">Ajouter commentaires</a></br></br>
            <a class="sid" href="http://localhost/projetweb/gestion_conges_salarie.php">Gérer ses congés</a></br></br>
            <a class="sid" href="http://localhost/projetweb/gestion_profil.php">Gérer son profil</a></br></br>
        <?php } 
        ?>
            </center>
        </div>
    
    </body>
    
    <footer>
        <p class="infos"> 38 Rue Molière, 94200 Ivry-sur-Seine </br> contact@esme.fr </br> 01 56 20 62 00 </p>
    </footer>
    
</html>
