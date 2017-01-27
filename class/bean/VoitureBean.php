<?php
  class VoitureBean{
    private $_marque;
    private $_modele;
    private $_dateConstruct;
    private $_immatriculation;

    public function __construct($marque, $modele, $date, $imma){
      $this-> _marque = $marque;
      $this-> _modele = $modele;
      $this-> _dateConstruct = $date;
      $this-> _immatriculation = $imma;
    }

    /**
     * Get the value of Marque
     *
     * @return mixed
     */
    public function getMarque()
    {
        return $this->_marque;
    }

    /**
     * Set the value of Marque
     *
     * @param mixed _marque
     *
     * @return self
     */
    public function setMarque($_marque)
    {
        $this->_marque = $_marque;

        return $this;
    }

    /**
     * Get the value of Modele
     *
     * @return mixed
     */
    public function getModele()
    {
        return $this->_modele;
    }

    /**
     * Set the value of Modele
     *
     * @param mixed _modele
     *
     * @return self
     */
    public function setModele($_modele)
    {
        $this->_modele = $_modele;

        return $this;
    }

    /**
     * Get the value of Date Construct
     *
     * @return mixed
     */
    public function getDateConstruct()
    {
        return $this->_dateConstruct;
    }

    /**
     * Set the value of Date Construct
     *
     * @param mixed _dateConstruct
     *
     * @return self
     */
    public function setDateConstruct($_dateConstruct)
    {
        $this->_dateConstruct = $_dateConstruct;

        return $this;
    }


    /**
     * Get the value of Immatriculation
     *
     * @return mixed
     */
    public function getImmatriculation()
    {
        return $this->_immatriculation;
    }

    /**
     * Set the value of Immatriculation
     *
     * @param mixed _immatriculation
     *
     * @return self
     */
    public function setImmatriculation($_immatriculation)
    {
        $this->_immatriculation = $_immatriculation;

        return $this;
    }

}
 ?>
