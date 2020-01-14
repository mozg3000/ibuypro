<?php


namespace app\models;


use yii\base\Model;
use app\lib\ibuypro\Tails;

class FindPath extends Model
{
    private $categories2Find = [];

    public function __construct($categories, $config = [])
    {
        parent::__construct($config);

        $this->categories2Find = $categories;
    }

    public function buildTails(array $racks){

        return Tails::buildTails($racks);
    }
}