<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>page admin beta</title>
  </head>

  <body>

<?php
    $bdd = new PDO('mysql:host=localhost;dbname=test-cinemat','gianni','piouroot');
    $req = $bdd->query('SELECT titre FROM film WHERE type');

?>

    <form action="" method="POST">
  <label>recherche : <input type="search" name="xd" placeholder="qqch"/></label>
  <input type="submit" />
    </form>

<?php
  while ($donnees = $req->fetch())
  {
  echo $donnees
  }

?>



  </body>
</html>
