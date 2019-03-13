<?php

include 'Eleve.php';
include 'ManagerEleve.php';
include 'ManagerProfesseur.php';
include 'ManagerDirection.php';

// Connexion a la base de donnée

		$bdd= new PDO('mysql:host=localhost;dbname=ecole','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        $membreEleve = new ManagerEleve($bdd);
        $membreProfesseur = new ManagerProfesseur($bdd);
				$membreDirection = new ManagerDirection($bdd);


				if (isset($_POST['inscription'])){

				$user = new eleve(array ('nom'=>$_POST['nom'], 'prenom'=>$_POST['prenom'], 'classe'=>$_POST['classe'], 'mdp'=>$_POST['mdp']));
				$a = $membreEleve->inscriptionEleve($user);
				header('location: index.php');

				}


if(isset($_POST['eleve'])){


 			 if (isset($_POST['connexion'])){

				 $user = new eleve(array ( 'nom'=>$_POST['nom'], 'mdp'=>$_POST['mdp']));
 			 				$a = $membreEleve->connexionEleve($user);
							header('location: index.php');

 			 }
}

if(isset($_POST['professeur'])){

				 $user = new professeur(array('nom'=>$_POST['nom'], 'mdp'=>$_POST['mdp']));
 			 				$membreProfesseur->connexionProfesseur($user);
 			 				header('location: index.php');

}

if(isset($_POST['direction'])){

					 $user = new direction(array ( 'nom'=>$_POST['nom'], 'mdp'=>$_POST['mdp']));
 			 				$membreDirection->connexionDirection($user);
 			 				header('location: index.php');

 			 }


?>
