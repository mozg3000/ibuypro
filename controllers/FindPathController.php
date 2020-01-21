<?php


namespace app\controllers;


use app\lib\ibuypro\Rack;
use app\models\Connections;
use app\models\FindPath;
use app\models\Racks;
use yii\helpers\Json;
use yii\rest\Controller;

class FindPathController extends Controller
{

    public function init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;
        \Yii::$app->user->enableAutoLogin = false;
    }

    public function actionIndex(string $id)
    {
        $data = [

            '1' => [
                'Racks' => [
                    [
                        "position"=> ["x"=> 78, "y"=> 318],
                        "width"=> 198,
                        "height"=> 18,
                        "label"=> "Макароны",
                        "fill"=> "blue",
                        "angle"=> 0,
                        "top"=> 7114,
                    ],
                    [
                        "position"=> ["x"=> 78, "y"=> 264],
                        "width"=> 198,
                        "height"=> 18,
                        "label"=> "Шоколад",
                        "fill"=> "blue",
                        "angle"=> 0,
                        "top"=> 3025,
                    ],
                    [
                        "position"=> ["x"=> 78, "y"=> 206],
                        "width"=> 198,
                        "height"=> 18,
                        "label"=> "Вода",
                        "fill"=> "blue",
                        "angle"=> 0,
                        "top"=> 7200,
                    ],
                    [
                        "position"=> ["x"=> 78, "y"=> 144],
                        "width"=> 198,
                        "height"=> 18,
                        "label"=> "Кетчуп",
                        "fill"=> "blue",
                        "angle"=> 0,
                        "top"=> 5378,
                    ],
                    [
                        "position"=> ["x"=> 324, "y"=> 144],
                        "width"=> 198,
                        "height"=> 18,
                        "label"=> "Видео",
                        "fill"=> "blue",
                        "angle"=> 0,
                        "top"=> 7602,
                    ],
                    [
                        "position"=> ["x"=> 324, "y"=> 204],
                        "width"=> 198,
                        "height"=> 18,
                        "label"=> "Консервы",
                        "fill"=> "blue",
                        "angle"=> 0,
                        "top"=> 5719,
                    ],
                    [
                        "position"=> ["x"=> 324, "y"=> 264],
                        "width"=> 198,
                        "height"=> 18,
                        "label"=> "Чай",
                        "fill"=> "blue",
                        "angle"=> 0,
                        "top"=> 6229,
                    ],
                    [
                        "position"=> ["x"=> 324, "y"=> 318],
                        "width"=> 198,
                        "height"=> 18,
                        "label"=> "Конфеты",
                        "fill"=> "blue",
                        "angle"=> 0,
                        "top"=> 404,
                    ],
                    [
                        "position"=> ["x"=> 288, "y"=> 348],
                        "width"=> 30,
                        "height"=> 30,
                        "label"=> "Старт",
                        "fill"=> "#E74C3C",
                        "angle"=> 0,
                        "top"=> 551,
                    ],
                    [
                        "position"=> ["x"=> 38, "y"=> 350],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "black",
                        "angle"=> 0,
                        "top"=> 2105,
                    ],
                    [
                        "position"=> ["x"=> 294, "y"=> 294],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "black",
                        "angle"=> 0,
                        "top"=> 1191,
                    ],
                    [
                        "position"=> ["x"=> 290, "y"=> 236],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "black",
                        "angle"=> 0,
                        "top"=> 2095,
                    ],
                    [
                        "position"=> ["x"=> 288, "y"=> 114],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "black",
                        "angle"=> 0,
                        "top"=> 8685,
                    ],
                    [
                        "position"=> ["x"=> 36, "y"=> 288],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "black",
                        "angle"=> 0,
                        "top"=> 6215,
                    ],
                    [
                        "position"=> ["x"=> 30, "y"=> 234],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "black",
                        "angle"=> 0,
                        "top"=> 1603,
                    ],
                    [
                        "position"=> ["x"=> 30, "y"=> 174],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "black",
                        "angle"=> 0,
                        "top"=> 6996,
                    ],
                    [
                        "position"=> ["x"=> 24, "y"=> 114],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "black",
                        "angle"=> 0,
                        "top"=> 6101,
                    ],
                    [
                        "position"=> ["x"=> 534, "y"=> 354],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "black",
                        "angle"=> 0,
                        "top"=> 2303,
                    ],
                    [
                        "position"=> ["x"=> 534, "y"=> 294],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "black",
                        "angle"=> 0,
                        "top"=> 7117,
                    ],
                    [
                        "position"=> ["x"=> 534, "y"=> 228],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "black",
                        "angle"=> 0,
                        "top"=> 2624,
                    ],
                    [
                        "position"=> ["x"=> 528, "y"=> 174],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "black",
                        "angle"=> 0,
                        "top"=> 7314,
                    ],
                    [
                        "position"=> ["x"=> 528, "y"=> 102],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "black",
                        "angle"=> 0,
                        "top"=> 8513,
                    ],
                    [
                        "position"=> ["x"=> 168, "y"=> 294],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "green",
                        "angle"=> 0,
                        "top"=> 9364,
                    ],
                    [
                        "position"=> ["x"=> 420, "y"=> 288],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "green",
                        "angle"=> 0,
                        "top"=> 3191,
                    ],
                    [
                        "position"=> ["x"=> 414, "y"=> 234],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "green",
                        "angle"=> 0,
                        "top"=> 486,
                    ],
                    [
                        "position"=> ["x"=> 414, "y"=> 180],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "green",
                        "angle"=> 0,
                        "top"=> 2619,
                    ],
                    [
                        "position"=> ["x"=> 408, "y"=> 102],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "green",
                        "angle"=> 0,
                        "top"=> 7506,
                    ],
                    [
                        "position"=> ["x"=> 162, "y"=> 240],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "green",
                        "angle"=> 0,
                        "top"=> 7503,
                    ],
                    [
                        "position"=> ["x"=> 156, "y"=> 174],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "green",
                        "angle"=> 0,
                        "top"=> 3099,
                    ],
                    [
                        "position"=> ["x"=> 156, "y"=> 102],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "green",
                        "angle"=> 0,
                        "top"=> 1590,
                    ],
                    [
                        "position"=> ["x"=> 288, "y"=> 180],
                        "width"=> 15,
                        "height"=> 15,
                        "label"=> "",
                        "fill"=> "black",
                        "angle"=> 0,
                        "top"=> 1050,
                    ],
                ],
                'Links' => [
                    [
                        "from"=> 551,
                        "to"=> 1191,
                    ],
                    [
                        "from"=> 551,
                        "to"=> 2303,
                    ],
                    [
                        "from"=> 551,
                        "to"=> 2105,
                    ],
                    [
                        "from"=> 2105,
                        "to"=> 6215,
                    ],
                    [
                        "from"=> 6215,
                        "to"=> 1603,
                    ],
                    [
                        "from"=> 1603,
                        "to"=> 6996,
                    ],
                    [
                        "from"=> 6996,
                        "to"=> 6101,
                    ],
                    [
                        "from"=> 6101,
                        "to"=> 1590,
                    ],
                    [
                        "from"=> 1590,
                        "to"=> 8685,
                    ],
                    [
                        "from"=> 8685,
                        "to"=> 7506,
                    ],
                    [
                        "from"=> 7506,
                        "to"=> 8513,
                    ],
                    [
                        "from"=> 8513,
                        "to"=> 7314,
                    ],
                    [
                        "from"=> 7314,
                        "to"=> 2624,
                    ],
                    [
                        "from"=> 2624,
                        "to"=> 7117,
                    ],
                    [
                        "from"=> 7117,
                        "to"=> 2303,
                    ],
                    [
                        "from"=> 1191,
                        "to"=> 2095,
                    ],
                    [
                        "from"=> 2619,
                        "to"=> 7314,
                    ],
                    [
                        "from"=> 2095,
                        "to"=> 486,
                    ],
                    [
                        "from"=> 486,
                        "to"=> 2624,
                    ],
                    [
                        "from"=> 1191,
                        "to"=> 3191,
                    ],
                    [
                        "from"=> 3191,
                        "to"=> 7117,
                    ],
                    [
                        "from"=> 1191,
                        "to"=> 9364,
                    ],
                    [
                        "from"=> 2095,
                        "to"=> 7503,
                    ],
                    [
                        "from"=> 2095,
                        "to"=> 1050,
                    ],
                    [
                        "from"=> 1050,
                        "to"=> 8685,
                    ],
                    [
                        "from"=> 1050,
                        "to"=> 3099,
                    ],
                    [
                        "from"=> 1050,
                        "to"=> 2619,
                    ],
                    [
                        "from"=> 3099,
                        "to"=> 6996,
                    ],
                    [
                        "from"=> 7503,
                        "to"=> 1603,
                    ],
                    [
                        "from"=> 9364,
                        "to"=> 6215,
                    ],
                    [
                        "from"=> 9364,
                        "to"=> 7114,
                    ],
                    [
                        "from"=> 7503,
                        "to"=> 3025,
                    ],
                    [
                        "from"=> 3099,
                        "to"=> 7200,
                    ],
                    [
                        "from"=> 1590,
                        "to"=> 5378,
                    ],
                    [
                        "from"=> 7506,
                        "to"=> 7602,
                    ],
                    [
                        "from"=> 2619,
                        "to"=> 5719,
                    ],
                    [
                        "from"=> 486,
                        "to"=> 6229,
                    ],
                    [
                        "from"=> 3191,
                        "to"=> 404,
                    ],
                ],
                'Categories' => ["Вода", "Видео", "Чай", "Макароны"]
//                'Categories' => ["Макароны", "Чай", "Вода", "Видео"]
            ]
        ];

        if (\Yii::$app->request->isPost) {

            $categories = \Yii::$app->request->post()['Categories'];
            $links = Connections::find()->where(['id_shops'=>$id])->all();
            $racks = Racks::find()->where(['id_shops'=>$id])->all();

            $finder = new FindPath($categories, $links, $racks);
//            $finder = new FindPath($categories, $data[$id]['Links'], $data[$id]['Racks']);

            $path = $finder->findPath();

            return $path;

        }
    }
}
