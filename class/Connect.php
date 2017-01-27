<?php
class Connect{
  private $bdd;

  public function __construct(){
    $this->bdd = new PDO('mysql:host=localhost;dbname=assurance;charset=utf8', 'root', 'root');
  }
    /**
     * Get the value of Bdd
     *
     * @return mixed
     */
    public function getBdd()
    {
        return $this->bdd;
    }

    /**
     * Set the value of Bdd
     *
     * @param mixed bdd
     *
     * @return self
     */
    public function setBdd($bdd)
    {
        $this->bdd = $bdd;

        return $this;
    }
}
 ?>
