<?php

class Article
{

    private $_id;
    private $_name;
    private $_quantity;
    private $_price;
    private $_photo;

    /**
     * @param $_id
     * @param $_name
     * @param $_quantity
     * @param $_price
     * @param $_photo
     */
    public function __construct($_id, $_name, $_quantity, $_price, $_photo)
    {
        $this->_id = $_id;
        $this->_name = $_name;
        $this->_quantity = $_quantity;
        $this->_price = $_price;
        $this->_photo = $_photo;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->_name = $name;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->_quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->_quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->_price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->_price = $price;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->_photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo): void
    {
        $this->_photo = $photo;
    }
}

?>;