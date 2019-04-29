<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>page admin beta 2</title>
  </head>

  <body>
    <?php
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=test-cinemat','gianni','piouroot');
    }
    catch (\Exception $e)
    {
      die('Erreur : '.$e->getMessage());
    }
    $type = $_POST['type'];
    $req = $bdd->prepare('SELECT titre FROM film WHERE type = $type');
    $req->execute();

    /*echo '<ul>';
    while ($donnees = $req->fetch())
    {
    	echo '<li>' . $donnees['titre'] . '</li>';
    }
    echo '</ul>';*/

    $req->closeCursor();
//INSERT INTO `film`(`titre`,`date`,`type`) VALUES ("saw","2019-04-11","animation")
//DELETE FROM `film` WHERE `film`.`id` = 13

    ?>


  </body>
</html>
