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
            \Yii::$app->response->format = Response::FORMAT_JSON;
            if (\Yii::$app->auth->signIn($model)){
                $user = \Yii::$app->auth->getUserByName($model->username);
//                var_dump($user);
//                return $this->redirect(['/']);
                return JSON::encode
                ([
                    'status' => 'OK',
                    'token' => $user->token,
                    'msg' => 'Вы удачно вошли в систему'
                ],JSON_FORCE_OBJECT);
            }else{
                return JSON::encode
                ([
                    'status' => 'deny',
                    'token' => '',
                    'msg' => 'Неверный пароль или имя пользователя'
                ],JSON_FORCE_OBJECT);
            }
        }

//        return $this->render('sign-in', ['model' => $model]);

    }
    public function actionSignUp(){

        $model = new Users();
        \Yii::$app->response->format = Response::FORMAT_JSON;
        if (\Yii::$app->request->isPost){
            $model->load(\Yii::$app->request->post());
            $model->scenarioSignUp();
//            var_dump($model);
            if (\Yii::$app->auth->signUp($model)){
//              return $this->redirect(['auth/sign-in', 'id' => $model->id]);
                return Json::encode([
                    'status' => 'registered',
                    'token' => '',
                    'msg' => 'Вы удачно зарегистрировались'
                ],JSON_FORCE_OBJECT);
            }else{
//                var_dump($model->errors);exit();
                $emailError = $model->errors['email'][0] ?? '';
                $usernameError = $model->errors['username'][0] ?? '';
                return Json::encode([
                    'status' => 'rejected',
                    'error' => [
                        'email' => $emailError,
                        'username' => $usernameError,
                    ]
                ]);
            }
        }

//        return$this->render('sign-up', ['model' => $model]);
    }

}
