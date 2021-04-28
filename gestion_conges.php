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
        
        <h2>Gestion congés</h2>
        
        <table border=1 width="100%">
            <thead>
                <tr>
                    <th></th>
                    <th>Congés payés</th>
                    <th>RTT</th>
                </tr>
            </thead>
            
            <tbody>
                <?php for($i=1;$i<$nbChamps;$i++) { 
                    $req2 = "SELECT * FROM salaries WHERE id_type = $i";
                    $result2 = $mysqli -> query($req2);
                    ?>
                <tr>
                    <?php while ($ligne = $result2 -> fetch_assoc()) { ?>
                    <td><?php echo $ligne['nom'];?></td>
                    <td><?php echo $ligne['conges_restant_non_payes'];?></td>
                    <td><?php echo $ligne['conges_restant_RTT'];?></td>
                    <?php }?>
                </tr>
                <?php }?>
            </tbody>
        </table>