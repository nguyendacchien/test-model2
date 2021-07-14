<?php


namespace App\Model;


class Product
{
    public $id;
    public $name;
    public $category;
    public $price;
    public $quantity;
    public $date;
    public $detail;

    /**
     * Product constructor.
     * @param $name
     * @param $category
     * @param $price
     * @param $quantity
     * @param $date_create
     * @param $detail
     */
    public function __construct($name, $category, $price, $quantity, $date, $detail)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->date = $date;
        $this->detail = $detail;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date_create
     */
    public function setDate($date_)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param mixed $detail
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    }


}