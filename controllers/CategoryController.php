<?php


namespace app\controllers;


use app\models\Category;
use yii\rest\Controller;

class CategoryController extends Controller
{
    public $enableCsrfValidation = false;

    public function init()

    {
        parent::init();
        \Yii::$app->user->enableSession = false;
        \Yii::$app->user->enableAutoLogin = false;
    }

    public function actionIndex()
    {
        $categories = [
            new Category(
                1,
                '#1F7087',
                'Молочка',
                'Какое-то описание категории',
                'https://via.placeholder.com/80'
            ),
        new Category(
            2,
                '#1F7087',
                'Хлебобулки',
                'Какое-то описание категории',
                'https://via.placeholder.com/80'
         ),
        new Category(
            3,
                '#1F7087',
                'Консервы',
                'Какое-то описание категории',
                'https://via.placeholder.com/80'
    ),
        new Category(
            4,
                '#1F7087',
                'Конфеты',
                'Какое-то описание категории',
                'https://via.placeholder.com/80'
    ),
        new Category(
            5,
                '#1F7087',
                'Чай',
                'Какое-то описание категории',
                'https://via.placeholder.com/80'
    ),
        new Category(
            6,
                '#1F7087',
                'Специи',
                'Какое-то описание категории',
                'https://via.placeholder.com/80'
    ),
        new Category(
            7,
                '#1F7087',
                'Макароны',
                'Какое-то описание категории',
                'https://via.placeholder.com/80'
    ),
        new Category(
            8,
                '#1F7087',
                'Овощи',
                'Какое-то описание категории',
                'https://via.placeholder.com/80'
    ),
        ];

        return $categories;
    }
}