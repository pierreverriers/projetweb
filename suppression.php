<?php $mysqli = new mysqli("localhost", "root", "", "projet_web");
                      $mysqli -> set_charset("utf8");
                      session_start();

$num=$_GET['i'];
$_SESSION['num'] = $num;

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Suppression salarié <?php echo $num ?> </title>
        <link rel="stylesheet" href="acceuil.css" />
    </head>
    <body>
         <header>
            <p class="logo"> 
            <img src="img/logo_esme3.png" alt="logo esme" title="logo esme" />
            </p>
            <h1>GESTION DES CONGES</h1>
        </header>
        
        <h2><?php echo $num ?></h2>

    <p class = "question">Êtes vous sur de vouloir supprimer le salarié <?php echo $num ?> ?</p>
    <form action="http://localhost/projetweb/gestion_salaries.php" method="POST" name="form"> 
            <center>
            <table>
                <tr>
                    <td><label for="Oui"> Oui </label>
                        <input type="radio" name="choix" id="Oui" value="Oui" />
                        <label for="Non"> Non </label>
                        <input type="radio" name="choix" id="Non" value="Non" /></td>
                    <tr>
                    <td><input type="submit" value="Envoyer" /></td>
                    <td><input type="reset" value="Réinitialliser" /></td>
                </tr>
                </tr>
            </table>
            </center>
    </form>
</body>
</html>
