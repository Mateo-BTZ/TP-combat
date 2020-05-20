<?php

include ('personnages.php');
include ('configdb.php');

?>

<!DOCTYPE html>
<html>
  <head>
    <title>TP : Mini jeu de combat</title>
    
    <meta charset="utf-8" />
  </head>
  <body>
  <h2>Choisissez votre nom de combattant</h2>
    <form action="" method="post">
       <input type="text" name="nom" maxlength="50" placeholder="Nom de combattant" />
        <input type="submit" value="Créer ce personnage" name="creer" />
        <input type="submit" value="Utiliser ce personnage" href="combat.php" name="utiliser" />
    </form>
  </body>
</html>