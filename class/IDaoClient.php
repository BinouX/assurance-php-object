<?php
  interface IDaoClient{
    public function insertClient($client);
    public function updateClient($newClient,$client);
    public function getClient($client);
    public function getAllClients();
  }
 ?>
