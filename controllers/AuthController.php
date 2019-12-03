<?php

namespace app\controllers;

use app\models\Users;

class AuthController extends \yii\web\Controller
{
    public function actionSignIn()
    {

        $model = new Users();

        if (\Yii::$app->request->isPost){
            $model->load(\Yii::$app->request->post());
            $model->scenarioSignIn();
//            var_dump($model);
            if (\Yii::$app->auth->signIn($model)){
                return $this->redirect(['/']);
            }
        }

        return $this->render('sign-in', ['model' => $model]);

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
