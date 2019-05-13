<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>page admin beta</title>
  </head>

  <body>





    <h1>ADMIN</h1>

    <p class="description">Admin vous permet d'ajouter un nouveau film lol.</p>


      <form action="test_cinemat.php" method="post" id="formulaire">
          <p>
            <label for="titre">titre</label> : <input type="text" name="titre" id="titre"  /><br />
            <label for="date">date</label> : <input type="date" name="date" id="date"  /><br />
            <label for="resume">resume</label> : <input type="text" name="resume" id="resume"  /><br />
            <label for="imag">imag</label> :  <input type="text" name="imag" id="imag" /><br />
            <label for="video">video</label> :  <input type="text" name="video" id="video" /><br />
            <label for="id_genre">genre</label> :  <input type="text" name="genre" id="genre" /><br />
            <label for="id_realisateur">realisateur</label> : <input type="text" name="realisateur" id="realisateur"  /><br />
            <label for="id_acteur">acteur</label> :  <input type="text" name="acteur" id="acteur" /><br />
            <input type="submit" value="Envoyer" />
          </p>
      </form>

      <?php

      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=cinemet-bolo','gianni','piouroot');
      }
      catch(Exception $e)
      {
            die('Erreur : '.$e->getMessage());
      }

      // Insertion du message à l'aide d'une requête préparée
      $req = $bdd->prepare('INSERT INTO film (titre, date, resume, imag, video, id_genre, id_realisateur, id_acteur) VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
      $req->execute(array($_POST['titre'], $_POST['date'], $_POST['resume'], $_POST['imag'], $_POST['video'], $_POST['id_genre'], $_POST['id_realisateur'], $_POST['id_acteur']));


      ?>


  </body>
</html>
