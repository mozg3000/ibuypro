<?php


namespace app\models;


use yii\base\Model;

class Shop extends Model
{
    public $id;
    public $name;
    public $shopping_center;
    public $address;
    public $description;

    public function __construct($id, $name, $shopping_center, $address, $description , $config = [])
    {
        parent::__construct($config);

        $this->id = $id;
        $this->name = $name;
        $this->shopping_center = $shopping_center;
        $this->address = $address;
        $this->description = $description;
    }

}