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

//            return '[{"position":{"x":96,"y":192},"width":198,"height":18,"label":"Стеллаж","fill":"blue","angle":0},{"position":{"x":108,"y":270},"width":198,"height":18,"label":"Стеллаж","fill":"blue","angle":0},{"position":{"x":108,"y":318},"width":198,"height":18,"label":"Стеллаж","fill":"blue","angle":0}]';
            return \Yii::$app->request->post();
        }

        return "{Status: OK}";
    }
}