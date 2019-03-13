<?php

Abstract class Gestion{

  protected $_nom;
  protected $_mdp;
  protected $_prenom;


  public function __construct(array $donnees){
    $this->hydrate($donnees);
  }

  public function hydrate(array $donnees){

    foreach ($donnees as $key => $value){
      $method = 'set'.ucfirst($key);

      if (method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }

  public function getnom() { return $this->_nom; }
  public function getprenom() { return $this->_prenom; }
  public function getmdp() { return $this->_mdp; }


  public function setNom($nom) { $this->_nom = $nom;}
  public function setPrenom($prenom) { $this->_prenom = $prenom;}
  public function setMdp($mdp) { $this->_mdp = $mdp;}

}
Class eleve extends Gestion{


  private $_classe;

  public function getClasse() { return $this->_classe; }

  public function setClasse($classe) { $this->_classe = $classe; }

 }
 Class professeur extends Gestion{

   private $_matiere;

   public function getmatiere() { return $this->_matiere; }

   public function setMatiere($matiere) { $this->_matiere = $matiere; }

  }

Class direction extends Gestion{

    private $_role;

    public function getrole() { return $this->_role; }

    public function setRole($role) { $this->_role = $role; }

   }





 ?>
