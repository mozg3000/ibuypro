<?php


namespace app\controllers;


use app\models\Shops;
use yii\rest\ActiveController;
use yii\rest\Controller;

class ShopController extends Controller
{

    public $shops = [
        '1' => [
            'Ашан',
            'ТЦ Город',
            'Адресс такой-то',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
        ],
        '2' => [
            'Перекрёсток',
            'Белая дача',
            'Адресс такой-то',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
        ],
        '3' => [
            'Пятёрочка',
            'Мега Химка',
            'Адресс такой-то',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
        ],
        '4' => [
            'Магнит',
            'Зеленопарк',
            'Адресс такой-то',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
        ], '5' => [
            'Дикси',
            'ТЦ Город 2',
            'Адресс такой-то',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
        ]
    ];

    public function init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;
        \Yii::$app->user->enableAutoLogin = false;
    }

    public function actionIndex(string $id)
    {
        return $this->shops[$id];
    }
}
