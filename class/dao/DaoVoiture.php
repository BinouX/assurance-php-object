<?php
  require "../Connect.php";
  require "../bean/VoitureBean.php";
  require "../IDaoVoiture.php";
  class DaoVoiture implements IDaoVoiture{

    private function connect(){
      $connect = new Connect();
      return $connect->getBdd();
    }

    public function insertVoiture($voiture){
      $bdd = $this->connect();
      $stmt = $bdd->prepare("INSERT INTO car(marque, modele,age, immatriculation) VALUES (?,?,?,?)");
      $stmt->execute(array($voiture->getMarque(), $voiture->getModele(),$voiture->getDateConstruct(), $voiture->getImmatriculation()));
    }


    public function updateVoiture($newVoiture, $voiture){
        $bdd = $this->connect();
        $stmt = $bdd->prepare("UPDATE car SET immatriculation = ?  WHERE immatriculation=?");
        $stmt->execute(array($newVoiture->getImmatriculation(), $voiture->getImmatriculation()));
    }

    public function getVoiture($voiture){
      $bdd = $this->connect();
      $stmt = $bdd->prepare("SELECT * FROM car WHERE immatriculation=?");
      $stmt->execute(array($voiture->getImmatriculation()));
      $voiture = new Voiture();
      while ($donnees = $reponse->fetch()){
        $voiture->setMarque($donnees['marque']);
        $voiture->setModele($donnees['model']);
        $voiture->setDateConstruct($donnees['age']);
        $voiture->setImmatriculation($donnees['immatriculation']);
      }
      return $voiture;
    }

    public function getAllVoitures(){
      $bdd = $this->connect();
      $response = $bdd->query('SELECT * FROM car');
      $voitures = array();
      while ($donnees = $reponse->fetch()){
          $voiture = new Voiture();
          $voiture->setMarque($donnees['marque']);
          $voiture->setModele($donnees['model']);
          $voiture->setDateConstruct($donnees['age']);
          $voiture->setImmatriculation($donnees['immatriculation']);
          array_push($voitures, $voiture);
      }
      return $voitures;
    }
  }
 ?>
