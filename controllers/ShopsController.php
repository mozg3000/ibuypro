<?php


namespace app\controllers;


use app\controllers\authenticators\ShopsAuthenticator;
use app\models\Shops;
use app\models\ShopsBase;
use yii\base\InvalidConfigException;
use yii\filters\auth\HttpBearerAuth;
use yii\rest\ActiveController;
use yii\rest\Controller;

class ShopsController extends ActiveController
{
    public $modelClass = ShopsBase::class;

    public function init()
    {
        try {
            parent::init();
        } catch (InvalidConfigException $e) {
        }
        \Yii::$app->user->enableSession = false;
        \Yii::$app->user->enableAutoLogin = false;
    }
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator']['class'] = ShopsAuthenticator::className();
        return $behaviors;
    }
    public function checkAccess($action, $model = null, $params = [])
    {
        // check if the user can access $action and $model
        // throw ForbiddenHttpException if access should be denied
//        var_dump($action); return;
        if ($action === 'index'){

        }else if($action === 'view'){

        }else{
            if (!\Yii::$app->rbac->canAdmin()) {
                throw new \yii\web\ForbiddenHttpException(sprintf('Only administrators can edit maps.', $action));
            }
        }
    }
//    public function actionIndex(string $id)
//    {
//
//        return $this->shopChains[$id];
//    }
}