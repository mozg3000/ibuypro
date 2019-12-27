<?php


namespace app\controllers;


use yii\rest\Controller;

class RacksController extends Controller
{

    public function init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;
        \Yii::$app->user->enableAutoLogin = false;
    }

    public function actionIndex()
    {
        if (\Yii::$app->request->isPost){

            return var_dump(\Yii::$app->request->post());
        }
    }
}