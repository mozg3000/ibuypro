<?php


namespace app\models;


use yii\base\Model;

class Category extends Model
{
    public $id;
    public $color;
    public $name;
    public $description;
    public $img;

    public function __construct($id, $color, $name, $description, $img )
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->img = $img;
        $this->color = $color;
    }
}