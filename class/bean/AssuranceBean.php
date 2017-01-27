<?php
  class AssuranceBean{
    private $_style;
    private $_price;
    private $_startDate;

    public function __construct($style, $price, $startDate){
      $this-> _style = $style;
      $this-> _price = $price;
      $this-> _startDate = $startDate;
    }

    /**
     * Get the value of Style
     *
     * @return mixed
     */
    public function getStyle()
    {
        return $this->_style;
    }

    /**
     * Set the value of Style
     *
     * @param mixed _style
     *
     * @return self
     */
    public function setStyle($_style)
    {
        $this->_style = $_style;

        return $this;
    }

    /**
     * Get the value of Price
     *
     * @return mixed
     */
    public function getPrice()
    {
        return $this->_price;
    }

    /**
     * Set the value of Price
     *
     * @param mixed _price
     *
     * @return self
     */
    public function setPrice($_price)
    {
        $this->_price = $_price;

        return $this;
    }

    /**
     * Get the value of Start Date
     *
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->_startDate;
    }

    /**
     * Set the value of Start Date
     *
     * @param mixed _startDate
     *
     * @return self
     */
    public function setStartDate($_startDate)
    {
        $this->_startDate = $_startDate;

        return $this;
    }

}
 ?>
