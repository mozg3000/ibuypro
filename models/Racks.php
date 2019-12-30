<?php


namespace app\models;


use yii\base\Model;

class Racks extends Model
{
    public $id;
    public $name;
    public $width;
    public $height;
    public $label;
    public $fill;
    public $angel;

    public function __construct($id, $name, $width, $height, $label, $fill, $angel, $config = [])
    {
        parent::__construct($config);

        $this->id = $id;
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
        $this->label = $label;
        $this->fill = $fill;
        $this->angel = $angel;
    }
}