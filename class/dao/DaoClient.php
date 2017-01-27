<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."assurance/class/Connect.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."assurance/class/bean/ClientBean.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."assurance/class/IDaoClient.php";
  class DaoClient implements IDaoClient{

    private function connect(){
      $connect = new Connect();
      return $connect->getBdd();
    }

    public function insertClient($client){
      $bdd = $this->connect();
      $stmt = $bdd->prepare("INSERT INTO client(lastname, firstname,age) VALUES (?,?,?)");
      $stmt->execute(array($client->getLastname(), $client->getFirstname(), $client->getAge()));
    }


    public function updateClient($newClient, $client){
        $bdd = $this->connect();
        $stmt = $bdd->prepare("UPDATE client SET lastname = ?, firstname=?, age=?  WHERE lastname=? AND firstname=?");
        $stmt->execute(array($newClient->getLastname(), $newClient->getFirstname(), $newClient->getAge(), $client->getLastname(), $client->getFirstname()));
    }

    public function getClient($client){
      $bdd = $this->connect();
      $stmt = $bdd->prepare("SELECT * FROM client WHERE lastname=? AND firstname=?");
      $stmt->execute(array($client->getLastname(), $client->getFirstname()));
      $client = new ClientBean();
      while ($donnees = $stmt->fetch()){
          $client->setLastname($donnees['lastname']);
          $client->setFirstname($donnees['firstname']);
          $client->setAge($donnees['age']);
      }
      return $client;
    }

    public function getAllClients(){
      $bdd = $this->connect();
      $response = $bdd->query('SELECT * FROM client');
      $clients = array();
      while ($donnees = $response->fetch()){
          $client = new ClientBean();
          $client->setLastname($donnees['lastname']);
          $client->setFirstname($donnees['firstname']);
          $client->setAge($donnees['age']);
          array_push($clients, $client);
      }
      return $clients;
    }
  }
 ?>
