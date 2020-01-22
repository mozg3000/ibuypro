<?php


namespace app\controllers\authenticators;


use yii\filters\auth\HttpBearerAuth;
use yii\web\UnauthorizedHttpException;

class ShopsAuthenticator extends HttpBearerAuth
{
    public function beforeAction($action){

//        throw new    UnauthorizedHttpException();
//        var_dump($action->id); return true;
        if($action->id === 'index'||$action->id === 'view'){
            return true;
        }else{
            try {
                return parent::beforeAction($action);
            } catch (UnauthorizedHttpException $e) {
                throw $e;
            }
        }
    }
}