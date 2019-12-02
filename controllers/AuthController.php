<?php

namespace app\controllers;

class AuthController extends \yii\web\Controller
{
    public function actionSignIn()
    {
        return $this->render('sign-in');
    }

}
