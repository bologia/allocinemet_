<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>mdp</title>
    </head>
    <body>


<?php


if (!isset($_POST['mdp_users']) OR $_POST['mdp_users'] != "king")
{
  ?>

  <p>Veuillez entrer le mdp pr accéder aux paramètres</p>
         <form action="test_cinemat_2.php" method="post">
             <p>
             <input type="password" name="mdp_users" />
             <input type="submit" value="Valider" />
             </p>
         </form>

<?php
}

else
{
  ?>

  <h1>ADMIN</h1>

  <p class="description">Admin vous permet d'ajouter un nouveau film lol.</p>

  <?php

  include('bdd.php');

  $req = $bdd->prepare('INSERT INTO film (titre, date, resume, imag, video) VALUES(?, ?, ?, ?, ?)');
  $req->execute(array($_POST['titre'], $_POST['date'], $_POST['resume'], $_POST['imag'], $_POST['video']));
//UPDATE film SET ... WHERE ...
//DELETE FROM film WHERE ...
  ?>


    <form action="test_cinemat_2.php" method="post" id="formulaire">
        <p>
          <label for="titre">titre</label> : <input type="text" name="titre" id="titre"  /><br />
          <label for="date">date</label> : <input type="date" name="date" id="date"  /><br />
          <label for="resume">synopsis</label> : <input type="text" name="resume" id="resume"  /><br />
          <label for="imag">affiche</label> :  <input type="text" name="imag" id="imag" /><br />
          <label for="video">vidéo</label> :  <input type="text" name="video" id="video" /><br />
      <!--    <label for="genre">genre</label> :  <input type="text" name="genre" id="genre" /><br />
          <label for="realisateur">réalisateur</label> : <input type="text" name="realisateur" id="realisateur"  /><br />
          <label for="acteur">acteur</label> :  <input type="text" name="acteur" id="acteur" /><br />-->


          <input type="submit" value="Envoyer" />
        </p>
    </form>

<?php
}
?>

<select>
  <?php


    /*include('bdd.php');

     $req = "SELECT nom_genre,id_genre FROM genre";
     $reponse = $bdd->query($req);

     ?>

     <?php

    while ($donnees = $reponse->fetch())
    {
    ?>


      <option><?php echo $donnees['nom_genre']; ?></option>



    <?php
    }
    $reponse->closeCursor();*/
    ?>
</select>

  </body>
</html>
