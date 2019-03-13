<?php

  class ManagerEleve {

      private $_db;

      public function __construct(PDO $db) {
          $this->_db = $db;
      }

      public function connexionEleve(eleve $user) {
          $req = $this->_db->prepare('SELECT * FROM eleve WHERE nom = :nom AND mdp = :mdp');
          $req->execute(array(':nom'=>$user->getnom(),':mdp'=>$user->getmdp()));
          $b = $req->fetch();

       if($b){
            session_start();
            $nom = new eleve ($b);
            $_SESSION['eleve'] = $nom->getnom();


  }
      }

      public function inscriptionEleve(eleve $user) {
          $req = $this->_db->prepare('INSERT INTO eleve (nom, prenom, classe, mdp) VALUES (:nom, :prenom, :classe, :mdp)');
          $req->bindValue(':nom', $user->getnom(), PDO::PARAM_STR);
          $req->bindValue(':prenom', $user->getprenom(), PDO::PARAM_STR);
          $req->bindValue(':classe', $user->getclasse(), PDO::PARAM_STR);
          $req->bindValue(':mdp', $user->getmdp(), PDO::PARAM_STR);
          $req->execute();
      }

  }
  ?>
