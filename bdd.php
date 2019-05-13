<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=cinemet-bolo;charset=utf8mb4','gianni','piouroot');
}
  catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

?>
