<?php

namespace app\controllers;

use app\models\RacksBase;
use yii\base\InvalidConfigException;
use yii\rest\ActiveController;
use yii\rest\Controller;

class RacksController extends ActiveController
{
    public $modelClass = RacksBase::class;

    public function init()
    {
        try {
            parent::init();
        } catch (InvalidConfigException $e) {
        }
        \Yii::$app->user->enableSession = false;
        \Yii::$app->user->enableAutoLogin = false;
    }


//    public function actions()
//    {
//        $actions = parent::actions();
//        unset($actions['create']);
//        unset($actions['index']);
//        return $actions;
//    }
//    public function actionCreate()
//    {
//        return \Yii::$app->request->post()['Racks'];
//    }
}
