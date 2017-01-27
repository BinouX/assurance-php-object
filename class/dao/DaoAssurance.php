<?php
  require "../Connect.php";
  require "../bean/AssuranceBean.php";
  require "../IDaoAssurance.php";
  class DaoAssurance implements IDaoAssurance{

    private function connect(){
      $connect = new Connect();
      return $connect->getBdd();
    }

    public function insertAssurance($assurance){
      $bdd = $this->connect();
      $stmt = $bdd->prepare("INSERT INTO assurance(style, price, start) VALUES (?,?,?)");
      $stmt->execute(array($assurance->getStyle(), $assurance->getPrice(),$assurance->getStartDate()));
    }


    public function updateAssurance($newAssurance, $assurance){
        $bdd = $this->connect();
        $stmt = $bdd->prepare("UPDATE assurance SET style = ?  WHERE style=?");
        $stmt->execute(array($newAssurance->getStyle(), $assurance->getStyle()));
    }

    public function getAssurance($assurance){
      $bdd = $this->connect();
      $stmt = $bdd->prepare("SELECT * FROM assurance WHERE style=?");
      $stmt->execute(array($assurance->getStyle()));
      $assurance = new Assurance();
      while ($donnees = $reponse->fetch()){
        $assurance->setStyle($donnees['style']);
        $assurance->setPrice($donnees['price']);
        $assurance->setStartDate($donnees['start']);
      }
      return $voiture;
    }

    public function getAllAssurances(){
      $bdd = $this->connect();
      $response = $bdd->query('SELECT * FROM car');
      $assurances = array();
      while ($donnees = $reponse->fetch()){
          $assurance = new Assurance();
          $assurance->setStyle($donnees['style']);
          $assurance->setPrice($donnees['price']);
          $assurance->setStartDate($donnees['start']);
          array_push($assurances, $assurance);
      }
      return $assurances;
    }
  }
 ?>
