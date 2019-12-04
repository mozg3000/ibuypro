<?php

namespace app\controllers;

use app\models\Users;
use yii\helpers\Json;
use yii\web\Response;

class AuthController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;

    public function actionSignIn()
    {
//        $this->enableCsrfValidation = false;
        $model = new Users();

        if (\Yii::$app->request->isPost){
//            var_dump(\Yii::$app->request->isAjax);
//            var_dump(\Yii::$app->request->post());
            $model->load(\Yii::$app->request->post());
//            $model->attributes = \Yii::$app->request->post()['LoginForm'];
            $model->scenarioSignIn();
            if (\Yii::$app->auth->signIn($model)){
                \Yii::$app->response->format = Response::FORMAT_JSON;
                $user = \Yii::$app->auth->getUserByName($model->username);
//                var_dump($user);
//                return $this->redirect(['/']);
                return JSON::encode(['token' => $user->token]);
            }
        }

//        return $this->render('sign-in', ['model' => $model]);

    }
    public function actionSignUp(){

        $model = new Users();

        if (\Yii::$app->request->isPost){
            $model->load(\Yii::$app->request->post());
            $model->scenarioSignUp();
            if (\Yii::$app->auth->signUp($model)){
              return $this->redirect(['auth/sign-in', 'id' => $model->id]);
            }
        }

        return$this->render('sign-up', ['model' => $model]);
    }

}