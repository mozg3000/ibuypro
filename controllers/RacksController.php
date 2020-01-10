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
                    "label"=>"Стеллаж",
                    "fill"=>"blue",
                    "angle"=>0
                ],
                ["position"=>["x"=>42,"y"=>78],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Стеллаж",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>42,"y"=>114],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Стеллаж",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>42,"y"=>150],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Стеллаж",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>42,"y"=>186],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Стеллаж",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>42,"y"=>222],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Стеллаж",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>42,"y"=>258],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Стеллаж",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>42,"y"=>294],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Стеллаж",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>42,"y"=>330],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Стеллаж",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>42],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Стеллаж",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>78],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Стеллаж",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>114],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Стеллаж",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>150],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Стеллаж",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>186],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Стеллаж",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>222],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Стеллаж",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>258],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Стеллаж",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>294],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Стеллаж",
                    "fill"=>"blue",
                    "angle"=>0],
                ["position"=>["x"=>264,"y"=>330],
                    "width"=>198,
                    "height"=>18,
                    "label"=>"Стеллаж",
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
