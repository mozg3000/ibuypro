<?php


namespace app\models;


use yii\base\Model;

class ShopChain extends Model
{
    public $id;
    public $name;
    public $description;

    public function __construct($id, $name, $description , $config = [])
    {
        parent::__construct($config);

        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }
}