<?php
  interface IDaoAssurance{
    public function insertAssurance($assurance);
    public function updateAssurance($assurance);
    public function getAssurance($assurance);
    public function getAllAssurances();
  }
?>
