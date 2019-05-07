<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>films</title>
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link src="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/type.css">
    <link rel="stylesheet" href="css/animate.css">

</head>

<body>

    <!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <header id="haut">
        <nav class="fixed-top" id="link_nav">
            <a href="index.php" id="logo">ALLOCINE<strong>MET</strong></a>
            <div id="Navbar">
                <a class="liens" href="allo_films.php">FILMS </a>
                <a class="liens" href="contact.php">CONTACT </a>
                <a class="liens" href="acteur.php">ACTEURS </a>
                <a class="liens" href="realisateur.php">REALISATEURS </a>
            </div>
            <div class="m-nav-toggle">
                <span class="m-toggle-icon"></span>
            </div>
        </nav>
    </header>

    <!--//////////////////////////////  HEADER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <?php
    try
    {
  // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=cinemet-bolo;charset=utf8mb4','gianni','piouroot');
    }
    catch(Exception $e)
    {
  // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
    }

     $id = $_GET['id'];
     $req = "SELECT * FROM genre WHERE id_genre=$id ";
     $reponse = $bdd->query($req);

     // On affiche chaque entrée une à une
       while ($donnees = $reponse->fetch())
       {
       ?>

    <div class="header_films">
        <h1>films <?php echo $donnees['nom_genre']; ?></h1>
        <div class="ligne">
            <img class="ligne_g fadeInLeft animated" src="img/ligne_g.png">
            <img class="ligne_d fadeInRight animated" src="img/ligne_d.png">
        </div>
    </div>

    <?php
    }
    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>

        <!--//////////////////////////////  MINIATURES FILMS DROITE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="liens_films fadeInUp animated">
                <div class="titre">  </div><br />

    <div class="test">

      <?php
      try
      {
    // On se connecte à MySQL
      $bdd = new PDO('mysql:host=localhost;dbname=cinemet-bolo;charset=utf8mb4','gianni','piouroot');
      }
      catch(Exception $e)
      {
    // En cas d'erreur, on affiche un message et on arrête tout
      die('Erreur : '.$e->getMessage());
      }

      $id = $_GET['id'];
      $req = "SELECT * FROM film,genre WHERE id_genre=$id and film.id_genre = genre.id_genre ";
       $reponse = $bdd->query($req);

    // On affiche chaque entrée une à une
      while ($donnees = $reponse->fetch())
      {
      ?>

          <a href="content.php?id=<?php echo $donnees['id_film']; ?>"><img class="effect " src="img/<?php echo $donnees['imag']; ?>" id="action">
              <p><?php echo $donnees['titre']; ?></p>
          </a>

      <?php
      }
      $reponse->closeCursor(); // Termine le traitement de la requête
      ?>

    </div>
           </div>
        </div>

    <!--//////////////////////////////  FOOTER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <footer id="footer" class="page-footer font-small text-white mdb-color pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left ">

            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3 mx-auto">

                <!-- Grid column -->
                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class=" text-uppercase mb-4  font-weight-bold text-white"><a href="index.html"> AllocineMET</a>
                    </h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 mx-auto mt-3" id="foot">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Films à l'affiche</h5>
                    <p>
                        <a href="#">Film 1</a>
                    </p>
                    <p>
                        <a href="#">Film 2</a>
                    </p>
                    <p>
                        <a href="#">Film 3</a>
                    </p>
                    <p>
                        <a href="#">Film 4</a>
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" id="foot">

                <!-- Grid column -->
                <div class="col-sm-3 col-md-3 col-lg-2 col-xl-2 mx-auto mt-3" id="foot">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Liens utiles</h5>
                    <p>
                        <a href="https://simplon.co/">Lorem Ipsum</a>
                    </p>
                    <p>
                        <a href="https://simplon-charleville.fr/">Lorem Ipsum</a>
                    </p>
                    <p>
                        <a href="#!">Lorem Ipsum</a>
                    </p>
                    <p>
                        <a href="#">Lorem Ipsum</a>
                    </p>
                </div>

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" id="foot">

                <!-- Grid column -->
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold"><a href="contact.php">Contact</a></h5>
                    <p>
                        AllocineMET</p>
                    <p>
                        www.AllocineMET.net</p>
                    <p>
                        TEL +33 6 52 50 05 35</p>
                    <p>
                        TEL +33 6 87 26 69 70</p>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Footer links -->

            <hr class="hr-footer">

            <!-- Grid row -->
            <div class="row d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7">

                    <!--Copyright-->
                    <p class="text-center text-md-left">© 2019 Copyright: AllocineMET

                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 ml-lg-0">

                    <!-- Social buttons -->
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/">
                                    <img src="img/facebook.png" title="facebook">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://twitter.com/">
                                    <img src="img/twitter.png" title="twitter">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://github.com/">
                                    <img src="img/github.png" title="github">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://fr.linkedin.com/">
                                    <img src="img/linkedin.png" title="linkedin">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

    </footer>

    <!--//////////////////////////////  BACK TO TOP BTN  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>


    <!--//////////////////////////////  SCRIPTS  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <script src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
        integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
    <script src="js/siema.min.js"></script>
    <script src="js/allo_films.js"></script>

</body>

</html>
