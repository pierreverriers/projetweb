<!DOCTYPE HTML>

<?php $mysqli = new mysqli("localhost", "root", "", "projet_web");
                      $mysqli -> set_charset("utf8");
                      $nbChamps = 4;
      $serveur = "localhost";
      $dbname = "projet_web";
      $user = "root";
      $pass = "";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="index.css" />
    </head>
    <body>
         <header>
            <p class="logo"> 
            <img src="img/logo_esme3.png" alt="logo esme" title="logo esme" />
            </p>
            <h1>GESTION DES CONGES</h1>
        </header>
        
        <?php
        if(htmlspecialchars($_POST["profil"]) == "directeur"){
            echo "Enregistrer en temps qu'administrateur".'<br>';
            echo 'profil : '.htmlspecialchars($_POST["profil"]).'<br>';
            echo 'mail : ' .htmlspecialchars($_POST["login"]).'<br>';
            echo 'mdp : ' .htmlspecialchars($_POST["mdp"]).'<br>';
            //<a href="gestion_salaries.php">Gérer les salariés</a> 
        }
        else {
            echo "Enregistrer en temps que salarié".'<br>';
            echo 'profil : '.htmlspecialchars($_POST["profil"]).'<br>';
            echo 'mail : ' .htmlspecialchars($_POST["login"]).'<br>';
            echo 'mdp : ' .htmlspecialchars($_POST["mdp"]).'<br>';
        }
        ?>
        
        <?php    
        
        echo 'Nom : '.htmlspecialchars($_POST["nom"]).'<br>';
        echo 'Prénom : ' .htmlspecialchars($_POST["prénom"]).'<br>';
        echo 'Mail : ' .htmlspecialchars($_POST["mail"]).'<br>';
        echo 'Tèl : ' .htmlspecialchars($_POST["tel"]).'<br>';
        echo 'Fonction : ' .htmlspecialchars($_POST["fonction"]).'<br>';
        echo 'Type de contrat : ' .htmlspecialchars($_POST["typecontrat"]).'<br>';
        echo 'Date d embauche : ' .htmlspecialchars($_POST["date_embauche"]).'<br>';
        echo 'Nombre de congés restant RTT : ' .htmlspecialchars($_POST["rtt"]).'<br>';
        echo 'Nombre de congés restant non payés : ' .htmlspecialchars($_POST["rttnp"]).'<br>';
            
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prénom"]);
        $mail = htmlspecialchars($_POST["mail"]);
        $tel = htmlspecialchars($_POST["tel"]);
        $fonction = htmlspecialchars($_POST["fonction"]);
        $type_contrat = htmlspecialchars($_POST["typecontrat"]);
        $date_embauche = htmlspecialchars($_POST["date_embauche"]);
        $conges_restant_RTT = htmlspecialchars($_POST["rtt"]);
        $conges_restant_non_payes = htmlspecialchars($_POST["rttnp"]);
        
        if($nom != "" && $prenom != "" && $mail != "" && $tel < 0100000000 && $conges_restant_RTT < 24 && $conges_restant_non_payes < 24){
                
        try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO salaries(nom, prenom, mail, tel, fonction, type_contrat, date_embauche, conges_restant_RTT, conges_restant_non_payes)
            VALUES(:nom, :prenom, :mail, :tel, :fonction, :type_contrat, :date_embauche, :conges_restant_RTT, :conges_restant_non_payes)");
        $sth->bindParam(':nom',$nom);
        $sth->bindParam(':prenom',$prenom);
        $sth->bindParam(':mail',$mail);
        $sth->bindParam(':tel',$tel);
        $sth->bindParam(':fonction',$fonction);
        $sth->bindParam(':type_contrat',$type_contrat);
        $sth->bindParam(':date_embauche',$date_embauche);
        $sth->bindParam(':conges_restant_RTT',$conges_restant_RTT);
        $sth->bindParam(':conges_restant_non_payes',$conges_restant_non_payes);
        $sth->execute();
    }
    catch(PDOException $e){
        echo 'Erreur : '.$e->getMessage();
    }
        }
        else 
            echo 'ERREUR';
 
?>
                
        </body>
                
        <footer>
            <p class="infos"> 38 Rue Molière, 94200 Ivry-sur-Seine </br> contact@esme.fr </br> 01 56 20 62 00 </p>
        </footer>
</html>
