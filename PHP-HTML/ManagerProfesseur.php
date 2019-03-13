<?php

  class ManagerProfesseur {

      private $_db;

      public function __construct(PDO $db) {
          $this->_db = $db;
      }

      public function connexionProfesseur(professeur $user) {
          $req = $this->_db->prepare('SELECT * FROM professeur WHERE nom = :nom AND mdp = :mdp');
          $req->execute(array(':nom'=>$user->getnom(), ':mdp'=>$user->getmdp()));
          $b = $req->fetch();

       if($b){
            session_start();
            $nom = new professeur ($b);
            $_SESSION['professeur'] = $nom->getnom();

  }


      }



  }
  ?>
