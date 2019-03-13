
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mon-ecole.com/connexion</title>


<script src="js/bootstrap.bundle.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">


  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href="css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">


  <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-shrink" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">Mon-ecole.com</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav offset-md-4 0 my-lg-2">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <div class="offset-md-8 col-md-8">
          <?php
          if(isset($_SESSION['user'])) { ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="espace.php">  <?php echo $_SESSION['user']; ?></a>
            </li>
          <?php } else { ?>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="connexion.php">Se connecter / S'inscrire</a>
            </li>
          <?php } ?>
          </div>
        </ul>
      </div>
    </div>
  </nav>


  <header class="masthead">
    <div class="container h-50">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-12 align-self-end">
          <body>
        <div class="row" >
           <div class="offset-md-4 col-md-4" >
             <br/>
              <br/>
             <p style="text-align: center; color: white;">Connectez vous !</p>


              <form class="form" role="form" method="post" action="PDOtraitement.php" accept-charset="UTF-8" id="login-nav">

                 <div class="form-group">
                   <label for="inputnom">Nom</label>
                    <input type="text" name="nom" class="form-control" id="inputnom" placeholder="Nom" required>
                 </div>
                 <div class="form-group">
                   <label for="mdp">Mot de passe</label>
                    <input type="password" name="mdp" class="form-control" id="mdp" placeholder="Password" required>
                 </div>
                 <div class="form-group">
                   <p style="text-align: center; color: white;">Je suis un : </p>

                   <input name="eleve" type="checkbox" >Eleve</input>
                   <br/>
                   <input name="professeur" type="checkbox" >Professeur</input>
                   <br/>
                   <input name="direction" type="checkbox" >Membre de la Direction</input>
                   <br/>

                   <br/>
                  </div>
                 <div class="form-group">
                    <button name="connexion" type="submit" class="btn btn-primary btn-block">Connexion</button>
                 </div>

                </form>


                   Nouveau ici ! <a href="inscription.php"><b>S'inscrire</b></a>


           </div>
        </div>

        </body>
        </div>
      </div>
    </div>
  </header>



  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019</div>
    </div>
  </footer>




</body>

</html>
