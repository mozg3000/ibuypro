<?php


namespace app\models;


use yii\base\Model;

class Shop extends Model
{
    public $id;
    public $name;
    public $address;
    public $description;

    public function __construct($id, $name, $address, $description , $config = [])
    {
        parent::__construct($config);

        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->description = $description;
    }

}