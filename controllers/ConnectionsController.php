<?php


namespace app\controllers;


use app\models\ConnectionsBase;
use yii\rest\ActiveController;

class ConnectionsController extends ActiveController
{
    public $modelClass = ConnectionsBase::class;
}