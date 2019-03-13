<?php

  class ManagerDirection {

      private $_db;

      public function __construct(PDO $db) {
          $this->_db = $db;
      }

      public function connexionDirection(direction $user) {
          $req = $this->_db->prepare('SELECT * FROM direction WHERE nom = :nom AND mdp = :mdp');
          $req->execute(array(':nom'=>$user->getnom(), ':mdp'=>$user->getmdp()));
          $b = $req->fetch();

       if($b){
            session_start();
            $nom = new direction ($b);
            $_SESSION['direction'] = $nom->getnom();

  }


      }



  }
  ?>
