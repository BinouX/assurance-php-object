<?php
require_once "../class/bean/ClientBean.php";
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();
?>
<!DOCTYPE>
<html>
  <head>
    <title>Visualisation client</title>
  </head>
  <body>
    <h2>Ajout d'un client</h2>
    <form method="POST" action="../controller/addClient.php">
      <label for="lastname">Nom: </label><input type="text" name="lastname" id="lastname">
      <label for="firstname">Prenom: </label><input type="text" name="firstname" id="firstname">
      <label for="age">Age:</label><input type="text" name="age" id="age">
      <input type="hidden" name="CRUD" id="CRUD" value="create">
      <input type="submit" value="Ajouter">
    </form>

    <div class="br"></div>

    <h2>Modification client</h2>
    <form method="POST" action="../controller/addClient.php">
      <label for="lastname">Nom: </label><input type="text" name="lastname" id="lastname">
      <label for="firstname">Prenom: </label><input type="text" name="firstname" id="firstname">

      <label for="lastname">Nouveau nom: </label><input type="text" name="newlastname" id="newlastname">
      <label for="firstname">Nouveau prenom: </label><input type="text" name="newfirstname" id="newfirstname">
      <label for="age">Nouvel age:</label><input type="text" name="newage" id="newage">
      <input type="hidden" name="CRUD" id="CRUD" value="update">
      <input type="submit" value="Modifier">
    </form>

    <div class="br"></div>

    <h2>Selection client</h2>
    <form method="POST" action="../controller/addClient.php">
      <label for="lastname">Nom: </label><input type="text" name="lastname" id="lastname">
      <label for="firstname">Prenom: </label><input type="text" name="firstname" id="firstname">
      <input type="hidden" name="CRUD" id="CRUD" value="read">
      <input type="submit" value="Chercher">
    </form>
    <?php
      if(isset($_SESSION['select'])){
            echo $_SESSION['select']->getLastname() ." ". $_SESSION['select']->getFirstname() . " a ". $_SESSION['select']->getAge(). ' ans! <br />';
        session_unset($_SESSION['select']);
      }
     ?>

    <div class="br"></div>

    <h2>Afficher tous les clients</h2>
    <form method="POST" action="../controller/addClient.php">
      <input type="hidden" name="CRUD" id="CRUD" value="readAll">
      <input type="submit" value="Voir tous les clients">
    </form>
    <?php
      if(isset($_SESSION['selectAll'])){
        foreach ($_SESSION['selectAll'] as $client)
        {
            echo $client->getLastname() ." ". $client->getFirstname() . " a ". $client->getAge(). ' ans! <br />';
        }
        session_unset($_SESSION['selectAll']);
      }
     ?>
  </body>
</html>
