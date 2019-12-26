<?php


namespace app\controllers;


use yii\rest\Controller;

class MapController extends Controller
{
    public $enableCsrfValidation = false;

    public function init()

    {
        parent::init();
        \Yii::$app->user->enableSession = false;
        \Yii::$app->user->enableAutoLogin = false;
    }

    public function actionIndex()
    {
        if(\Yii::$app->request->isPost){
            return '{"name": "Post"}';
        }
        if(\Yii::$app->request->isDelete){
            return '{"name": "Delete"}';
        }


        return true;
    }
}