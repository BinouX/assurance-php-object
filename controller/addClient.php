<?php
  require_once "../class/bean/ClientBean.php";
  require_once "../class/dao/DaoClient.php";
  session_start();
  function createClient($lastname, $firstname, $age){
    $client = new ClientBean();
    $daoClient = new DaoClient();
    $client->setLastname($lastname);
    $client->setFirstname($firstname);
    $client->setAge($age);
    $daoClient->insertClient($client);
  }

  function updateClient($newlastname, $newfirstname, $lastname, $firstname, $newage){
    $client = new ClientBean();
    $newClient = new ClientBean();
    $daoClient = new DaoClient();

    $client->setLastname($lastname);
    $client->setFirstname($firstname);

    $newClient->setLastname($newlastname);
    $newClient->setFirstname($newfirstname);
    $newClient->setAge($newage);

    $daoClient->updateClient($newClient, $client);
  }

  function selectClient($lastname, $firstname){
    $client = new ClientBean();
    $daoClient = new DaoClient();
    $client->setLastname($lastname);
    $client->setFirstname($firstname);

    $var = $daoClient->getClient($client);
    $_SESSION['select'] = $var;
  }

  function selectAllClients(){
    $daoClient = new DaoClient();
    $var = $daoClient->getAllClients();
    $_SESSION['selectAll'] = $var;
  }

  if($_POST['CRUD'] == "create"){
    if(isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['age'])){
      createClient($_POST['lastname'], $_POST['firstname'], $_POST['age']);
    }
  }else if($_POST['CRUD'] == "update"){
    if(isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['newlastname']) && isset($_POST['newfirstname']) && isset($_POST['newage'])){
      updateClient($_POST['newlastname'],$_POST['newfirstname'], $_POST['lastname'], $_POST['firstname'], $_POST['newage']);
    }
  }else if($_POST['CRUD'] == "read"){
    if(isset($_POST['lastname']) && isset($_POST['firstname'])){
      selectClient($_POST['lastname'], $_POST['firstname']);
    }
  }else if($_POST['CRUD'] == "readAll"){
    selectAllClients();
  }

  header('Location: ../view/client.php');
 ?>
