<?php


namespace app\controllers;


use yii\rest\Controller;

class RacksController extends Controller
{
    public $racks = [
        '1'=>[
            'Racks'=>[
                [   "position"=>["x"=>42,"y"=>44],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Макароны",
                    "fill"=>"blue",
                    "angle"=>0
                ],
                ["position"=>["x"=>42,"y"=>78],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"шоколад",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>42,"y"=>114],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Консервы",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>42,"y"=>150],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Крупа",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>42,"y"=>186],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Яйцо",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>42,"y"=>222],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Вода",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>42,"y"=>258],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Бельё",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>42,"y"=>294],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Мыло",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>42,"y"=>330],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Кетчуп",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>42],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Сад",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>78],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Фасад",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>114],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Вата",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>150],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Шашлык",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>186],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Балык",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>222],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Затык",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>258],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Втык",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>294],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Утык",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>330],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Перетык",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>234,"y"=>360],
                    "width"=>30,
                    "height"=>30,
                    "label"=>"Старт",
                    "fill"=>"#E74C3C",
                    "angle"=>0]
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
        if (\Yii::$app->request->isPost){

//            return $this->racks[$id];
//            return "{Status: OK}";
            return \Yii::$app->request->post();
        }


        return $this->racks[$id];
    }
}
