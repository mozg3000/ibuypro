<?php


namespace app\controllers;


use app\controllers\actions\maps\IndexAction;
use app\models\Map;
use yii\base\InvalidConfigException;
use yii\rest\Controller;

class MapsController extends Controller
{
    public $modelClass = Map::class;
    public function init() {
        try {
            parent::init();
        } catch (InvalidConfigException $e) {
        }
        \Yii::$app->user->enableSession = false;
        \Yii::$app->user->enableAutoLogin = false;

    }

    public function actions()
    {
        return [
            'index' => [
                'class' => 'app\controllers\actions\maps\IndexAction',
                'modelClass' => $this->modelClass,
//                'checkAccess' => [$this, 'checkAccess'],
            ],
//            'view' => [
//                'class' => 'yii\rest\ViewAction',
////                'modelClass' => $this->modelClass,
////                'checkAccess' => [$this, 'checkAccess'],
//            ],
//            'create' => [
//                'class' => 'yii\rest\CreateAction',
////                'modelClass' => $this->modelClass,
////                'checkAccess' => [$this, 'checkAccess'],
////                'scenario' => $this->createScenario,
//            ],
//            'update' => [
//                'class' => 'yii\rest\UpdateAction',
////                'modelClass' => $this->modelClass,
////                'checkAccess' => [$this, 'checkAccess'],
////                'scenario' => $this->updateScenario,
//            ],
//            'delete' => [
//                'class' => 'yii\rest\DeleteAction',
////                'modelClass' => $this->modelClass,
////                'checkAccess' => [$this, 'checkAccess'],
//            ],
////            'options' => [
////                'class' => 'yii\rest\OptionsAction',
////            ],
        ];
    }
}