<?php
  interface IDaoVoiture{
    public function insertVoiture($voiture);
    public function updateVoiture($voiture);
    public function getVoiture($voiture);
    public function getAllVoitures();
  }
 ?>
