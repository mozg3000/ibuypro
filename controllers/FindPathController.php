<?php


namespace app\controllers;


use app\lib\ibuypro\Rack;
use app\models\FindPath;
use yii\rest\Controller;

class FindPathController extends Controller
{
    public $categories = [
        'Макароны' => 0,
        'шоколад' => 0,
        'Консервы' => 0,
        'Крупа' => 0,
        'Яйцо' => 0,
        'Вода' => 0,
        'Бельё' => 0,
        'Мыло' => 0,
        'Кетчуп' => 0,
        'Сад' => 0,
        'Фасад' => 0,
        'Вата' => 0,
        'Шашлык' => 0,
        'Балык' => 0,
        'Затык' => 0,
        'Втык' => 0,
        'Утык' => 0,
        'Перетык' => 0,
    ];

    public function init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;
        \Yii::$app->user->enableAutoLogin = false;
    }

    public function actionIndex(string $id)
    {
        $racks = [
            '1' => [
                'Racks' => [
                    new Rack(["x" => 42, "y" => 44],
                        198,
                        18,
                        "Макароны",
                        "blue",
                        0)                ],
                new Rack(["x" => 42, "y" => 78],
                    198,
                    18,
                    "шоколад",
                    "blue",
                    0),
                new Rack(["x" => 42, "y" => 114],
                    198,
                    18,
                    "Консервы",
                    "blue",
                    0),
                new Rack(["x" => 42, "y" => 150],
                    198,
                    18,
                    "Крупа",
                    "blue",
                    0),
                new Rack(["x" => 42, "y" => 186],
                    198,
                    18,
                    "Яйцо",
                    "blue",
                    0),
                new Rack(["x" => 42, "y" => 222],
                    198,
                    18,
                    "Вода",
                    "blue",
                    0),
                new Rack(["x" => 42, "y" => 258],
                    198,
                    18,
                    "Бельё",
                    "blue",
                    0),
                new Rack(["x" => 42, "y" => 294],
                    198,
                    18,
                    "Мыло",
                    "blue",
                    0),
                new Rack(["x" => 42, "y" => 330],
                    198,
                    18,
                    "Кетчуп",
                    "blue",
                    0),
                new Rack(["x" => 264, "y" => 42],
                    198,
                    18,
                    "Сад",
                    "blue",
                    0),
                new Rack(["x" => 264, "y" => 78],
                    198,
                    18,
                    "Фасад",
                    "blue",
                    0),
                new Rack(["x" => 264, "y" => 114],
                    198,
                    18,
                    "Вата",
                    "blue",
                    0),
                new Rack(["x" => 264, "y" => 150],
                    198,
                    18,
                    "Шашлык",
                    "blue",
                    0),
                new Rack(["x" => 264, "y" => 186],
                    198,
                    18,
                    "Балык",
                    "blue",
                    0),
                new Rack(["x" => 264, "y" => 222],
                    198,
                    18,
                    "Затык",
                    "blue",
                    0),
                new Rack(["x" => 264, "y" => 258],
                    198,
                    18,
                    "Втык",
                    "blue",
                    0),
                new Rack(["x" => 264, "y" => 294],
                    198,
                    18,
                    "Утык",
                    "blue",
                    0),
                new Rack(["x" => 264, "y" => 330],
                    198,
                    18,
                    "Перетык",
                    "blue",
                    0),
                new Rack(["x" => 234, "y" => 360],
                    30,
                    30,
                    "Старт",
                    "#E74C3C",
                    0)
            ]
    ];
        if (\Yii::$app->request->isPost) {

            $finder = new FindPath(\Yii::$app->request->post());

            return $finder->buildTails($racks[1]['Racks']);
//            return  \Yii::$app->request->post();
//            return  "{Status: OK}";
        }
    }
}
