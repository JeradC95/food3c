<?php

class Order{
    private $_food;
    private $_meal;
    private $_condiments;

    /**
     * @return mixed
     */
    public function getFood()
    {
        return $this->_food;
    }

    /**
     * @param mixed $food
     */
    public function setFood($food)
    {
        $this->_food = $food;
    }

    /**
     * @return mixed
     */
    public function getMeal()
    {
        return $this->_meal;
    }

    /**
     * @param mixed $meal
     */
    public function setMeal($meal)
    {
        $this->_meal = $meal;
    }

    /**
     * @return mixed
     */
    public function getCondiments()
    {
        return $this->_condiments;
    }

    /**
     * @param mixed $condiments
     */
    public function setCondiments($condiments)
    {
        $this->_condiments = $condiments;
    }


}