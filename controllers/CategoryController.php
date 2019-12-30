<?php


namespace app\controllers;


use yii\rest\Controller;

class CategoryController extends Controller
{
    public function init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;
        \Yii::$app->user->enableAutoLogin = false;
    }
    public function actionIndex(string $id)
    {

        if (\Yii::$app->request->isPost){


            return "{Status: OK}";
        }

        return "{Status: BAD}";
    }
}