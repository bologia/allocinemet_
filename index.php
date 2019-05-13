<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>AllocineMet</title>

    <link href="https://fonts.googleapis.com/css?family=Poiret+One|Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script rel="text/javascript" src="app.js"></script>
    <link rel="stylesheet" href="css/animate.css">


</head>


<body>


    <header>
        <nav class="fixed-top" id="link_nav">
            <a href="#" class="mt-2" id="logo">ALLOCINE<strong>MET</strong></a>
            <div id="Navbar">
                <a href="allo_films.php">FILMS </a>
                <a href="contact.php">CONTACT </a>
                <a href="perso.php">ARTISTES </a>

            </div>
            <div class="m-nav-toggle">
              <span class="m-toggle-icon"></span>
        </nav>
    </header>

    <div onmouseover="nav2()" id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/x1080-jMf.jpg" class="d-block w-100 img" height="960px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/hobbit_3.jpg" class="d-block w-100 img" height="960px"  class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/endgame.jpg" class="d-block w-100 img" height="960px" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="bg1">
        <h1 class="text-center text-light  mb-3">bientôt dispo</h1>
        <div class="ligne text-center">
          <img class="ligne_g fadeInLeft animated" src="img/ligne_g.png">
          <img class="ligne_d fadeInRight animated" src="img/ligne_d.png">
      </div>

      <div class="carousel mt-5" data-flickity>

        <?php

         include('bdd.php');

         $req = "SELECT imag,id_film FROM film";
         $reponse = $bdd->query($req);


      // On affiche chaque entrée une à une
        while ($donnees = $reponse->fetch())
        {
        ?>

        <a href="content.php?id=<?php echo $donnees['id_film']; ?>">
          <div class="carousel-cell"><img class="img_caroussel" width="500px" src="img/<?php echo $donnees['imag']; ?>"></div>
        </a>


        <?php
        }
        $reponse->closeCursor(); // Termine le traitement de la requête
        ?>

      </div>
    </div>


    <div class="parallax-window" data-parallax="scroll" data-image-src="./img/cinem.jpg"></div>
    <div onmouseover="nav1()" class="container-titre mx-auto my-5 text-center">
            <h1>ALLOCINEMET</h1>
            <hr class="col-4" style="background-color: blue;">
        </div>
        <div class="container-fluid col-12 mx-auto">
          <div class="row">
            <div class="col-1 mx-auto"></div>
            <div class="image float-left col-4">
                <img src="https://i.ytimg.com/vi/GXM838nBLuw/maxresdefault.jpg"  class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-2 mx-auto"></div>
            <div class="text-center container-fluid col-4 mx-auto" id="reduction">
                <h2 class=" container-fluid mx-auto">Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga error reiciendis repellat, aut quos
                    culpa
                    distinctio tempora a laudantium voluptatem eligendi possimus nesciunt quas maiores, asperiores
                    beatae
                    esse? Nulla, totam.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, nesciunt sapiente. Magnam dicta
                    eligendi
                    repellendus repellat dolore saepe rem totam. Possimus quam illo aliquam repudiandae ipsam nam ad, et
                    quis?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, nesciunt sapiente. Magnam dicta
                    eligendi
                    repellendus repellat dolore saepe rem totam. Possimus quam illo aliquam repudiandae ipsam nam ad, et
                    quis?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita minus nisi sed cum, molestiae
                    voluptates est voluptatibus architecto iusto molestias esse sapiente hic nulla quasi vel aperiam a
                    ex tempora!</p>
            </div>
            <div class="col-1 mx-auto"></div>
          </div>
        </div>

    <footer id="footer" class="page-footer font-small text-white mdb-color pt-4">

            <!-- Footer Links -->
            <div class="container text-center text-md-left ">

              <!-- Footer links -->
              <div class="row text-center text-md-left mt-3 pb-3 mx-auto">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h5 class=" text-uppercase mb-4  font-weight-bold text-white"><a href="index.html"> AllocineMET</a></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
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

                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
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
                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
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

              <hr class="hr-footer" color="black">

              <!-- Grid row -->
              <div class="row d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-7 col-lg-8">

                  <!--Copyright-->
              <p class="text-center text-md-left">© 2019 Copyright: AllocineMET

                  </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 ml-lg-0">

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


    <script src="js/app.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/parallax.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
