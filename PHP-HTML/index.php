<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mon-ecole.com</title>


<script src="js/bootstrap.bundle.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">


  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href="css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php
  if(isset($_SESSION['eleve'])) { ?>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-shrink" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Mon-ecole.com</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav offset-md-4 0 my-lg-2">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
          </li>
          <div class="offset-md-10 col-md-8">

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="compte.php">  <?php echo $_SESSION['eleve']; ?></a>
            </li>
          </div>
          </ul>
          </div>
          </div>
          </nav>

            <header class="masthead">
              <div class="container h-200">
                <br/>
                <br/>
                <br/>
                    <div class="row" >
                       <div class="offset-md-4 col-md-4" >
                         <form class="form" role="form" method="post" action="compte.php">
                             <button type="submit" class="btn btn-primary btn-block">Espace Eleve</button></br>
                         </form>
                         <form class="form" role="form" method="post" action="cours.php">
                             <button type="submit" class="btn btn-primary btn-block">Mes Cours</button></br>
                         </form>
                         <form class="form" role="form" method="post" action="logout.php">
                             <button type="submit" class="btn btn-primary btn-block">Deconnexion</button></br>
                         </form>
                       </div>
                    </div>
                </div>
              </div>
            </header>

          <?php }  if(isset($_SESSION['professeur'])) { ?>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-shrink" id="mainNav">
              <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Mon-ecole.com</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav offset-md-4 0 my-lg-2">
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="index.php">Acceuil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
                    </li>
                    <div class="offset-md-10 col-md-8">

                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="compte.php"><?php echo $_SESSION['professeur']; ?></a>
                      </li>
                    </div>
                    </ul>
                    </div>
                    </div>
                    </nav>

                        <header class="masthead">
                          <div class="container h-200">
                            <br/>
                            <br/>
                            <br/>
                                <div class="row" >
                                   <div class="offset-md-4 col-md-4" >
                                     <form class="form" role="form" method="post" action="gestion.php">
                                         <button type="submit" class="btn btn-primary btn-block">Gestion professeur</button></br>
                                     </form>
                                     <form class="form" role="form" method="post" action="logout.php">
                                         <button type="submit" class="btn btn-primary btn-block">Deconnexion</button></br>
                                     </form>
                                   </div>
                                </div>
                            </div>
                          </div>
                        </header>

          <?php }  if(isset($_SESSION['direction'])) { ?>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-shrink" id="mainNav">
              <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Mon-ecole.com</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav offset-md-4 0 my-lg-2">
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="index.php">Acceuil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
                    </li>
                    <div class="offset-md-10 col-md-8">

                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="compte.php"><?php echo $_SESSION['direction']; ?></a>
                      </li>
                    </div>
                    </ul>
                    </div>
                    </div>
                    </nav>

                      <header class="masthead">
                        <div class="container h-200">
                          <br/>
                          <br/>
                          <br/>
                              <div class="row" >
                                 <div class="offset-md-4 col-md-4" >
                                   <form class="form" role="form" method="post" action="gestion.php">
                                       <button type="submit" class="btn btn-primary btn-block">Gestion direction</button></br>
                                   </form>
                                   <form class="form" role="form" method="post" action="logout.php">
                                       <button type="submit" class="btn btn-primary btn-block">Deconnexion</button></br>
                                   </form>
                                 </div>
                              </div>
                          </div>
                        </div>
                      </header>

          <?php } if(empty($_SESSION['eleve'])&&empty($_SESSION['professeur'])&&empty($_SESSION['direction'])) { ?>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-shrink" id="mainNav">
              <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Mon-ecole.com</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav offset-md-4  col-lg-6">
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="index.php">Acceuil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
                    </li>
                    <div class="offset-md-8 col-md-8">
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="connexion.php">Se connecter / S'inscrire</a>
                      </li>
                   </div>
               </ul>
            </div>
        </div>
    </nav>

  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Bienvenue sur<br/> Mon-ecole.com</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Connectez-vous ou inscrivez-vous si ce n'est pas déjà fait pour accéder à votre espace personalisé de Mon-ecole.com</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="connexion.php">Me connecter</a>
        </div>
      </div>
    </div>
  </header>

<?php } ?>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019</div>
    </div>
  </footer>




</body>

</html>
