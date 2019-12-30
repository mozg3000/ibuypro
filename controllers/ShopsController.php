<?php


namespace app\controllers;


use app\models\Shop;
use yii\rest\Controller;

class ShopsController extends Controller
{
    public $shopChains = [
        '1'=>[
            '1'=>[
                'Ашан',
                'ТЦ Город',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],
            '2'=>[
                'Ашан',
                'Белая дача',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],
            '3'=>[
                'Ашан',
                'Мега Химка',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],
            '4'=>[
                'Ашан',
                'Зеленопарк',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],'5'=>[
            'Ашан',
            'ТЦ Город 2',
            'Адресс такой-то',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
        ]
        ],
        '2'=>[
            '1'=>[
                'Перекрёсток',
                'ТЦ 1',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],
            '2'=>[
                'Перекрёсток',
                'ТЦ 2',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],
            '3'=>[
                'Перекрёсток',
                'ТЦ 3',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],
            '4'=>[
                'Перекрёсток',
                'ТЦ 4',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],'5'=>[
            'Перекрёсток',
            'ТЦ 5',
            'Адресс такой-то',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
        ]
        ],
        "3"=>[
            '1'=>[
                'Пятёрочка',
                'ТЦ 1',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],
            '2'=>[
                'Пятёрочка',
                'ТЦ 2',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],
            '3'=>[
                'Пятёрочка',
                'ТЦ 3',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],
            '4'=>[
                'Пятёрочка',
                'ТЦ 4',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],'5'=>[
                'Пятёрочка',
                'ТЦ 5',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ]
        ],
        '4'=>[
            '1'=>[
                'Магнит',
                'ТЦ 1',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],
            '2'=>[
                'Магнит',
                'ТЦ 2',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],
            '3'=>[
                'Магнит',
                'ТЦ 3',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],
            '4'=>[
                'Магнит',
                'ТЦ 4',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],'5'=>[
                'Магнит',
                'ТЦ 5',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ]
        ],
        '5'=>[
            '1'=>[
                'Дикси',
                'ТЦ 1',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],
            '2'=>[
                'Дикси',
                'ТЦ 2',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],
            '3'=>[
                'Дикси',
                'ТЦ 3',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],
            '4'=>[
                'Дикси',
                'ТЦ 4',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ],'5'=>[
                'Дикси',
                'ТЦ 5',
                'Адресс такой-то',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur deleniti fugiat molestias quasi quo ratione totam, voluptatum! Architecto, dicta eveniet facilis hic in magni maiores quis tempore ullam vero.'
            ]
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

        return $this->shopChains[$id];
    }
}