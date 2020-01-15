<?php


namespace app\controllers;


use yii\rest\Controller;

class MapController extends Controller
{
    public function init()

    {
        parent::init();
        \Yii::$app->user->enableSession = false;
        \Yii::$app->user->enableAutoLogin = false;
    }

    public function actionIndex()
    {
        if(\Yii::$app->request->isPost){
            print_r(\Yii::$app->request->post());
//            return \Yii::$app->request->post();
        }
        if(\Yii::$app->request->isDelete){
            return '{"name": "Delete"}';
        }
        return true;
    }
}