<?php
  class ClientBean{
    private $_lastname;
    private $_firstname;
    private $_age;
    private $_assurance;
    private $_car;

  public function __construct(/*$ln,$fn,$age,$assu,$car*/){
      /*$this-> _lastname = $ln;
      $this-> _firstname = $fn;
      $this-> _age = $age;
      $this-> _assurance = $assu;
      $this-> _car = $car;*/
    }

    /**
     * Get the value of Lastname
     *
     * @return mixed
     */
    public function getLastname()
    {
        return $this->_lastname;
    }

    /**
     * Set the value of Lastname
     *
     * @param mixed _lastname
     *
     * @return self
     */
    public function setLastname($_lastname)
    {
        $this->_lastname = $_lastname;

        return $this;
    }

    /**
     * Get the value of Firstname
     *
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->_firstname;
    }

    /**
     * Set the value of Firstname
     *
     * @param mixed _firstname
     *
     * @return self
     */
    public function setFirstname($_firstname)
    {
        $this->_firstname = $_firstname;

        return $this;
    }

    /**
     * Get the value of Age
     *
     * @return mixed
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * Set the value of Age
     *
     * @param mixed _age
     *
     * @return self
     */
    public function setAge($_age)
    {
        $this->_age = $_age;

        return $this;
    }

    /**
     * Get the value of Car
     *
     * @return mixed
     */
    public function getCar()
    {
        return $this->_car;
    }

    /**
     * Set the value of Car
     *
     * @param mixed _car
     *
     * @return self
     */
    public function setCar($_car)
    {
        $this->_car = $_car;

        return $this;
    }

}
 ?>
