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
    public function actionShop(string $id)
    {
        $shops = [new Shop(
                1,
                'Ашан',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ),new Shop(
                2,
                'Ашан',
            'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ),new Shop(
                3,
                'Ашан',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ),new Shop(
                4,
                'Магнит',
            'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ),new Shop(
                5,
                'Ашан',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            )];
        return $shops;

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