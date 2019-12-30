<?php


namespace app\controllers;


use app\models\Shop;
use app\models\ShopChain;
use yii\rest\Controller;

class ChainController extends Controller
{
    public function init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;
        \Yii::$app->user->enableAutoLogin = false;
    }

    public function actionIndex()
    {
        $chain = [
            new ShopChain(
                1,
                'Ашан',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ),new ShopChain(
                2,
                'Перекрёсток',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ),new ShopChain(
                3,
                'Пятёрочка',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ),new ShopChain(
                4,
                'Магнит',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ),new ShopChain(
                5,
                'Дикси',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            )];
        return $chain;
    }

}