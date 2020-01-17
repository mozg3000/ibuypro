<?php

namespace app\controllers;

use app\models\RacksBase;
use yii\rest\ActiveController;
use yii\rest\Controller;

class RacksController extends ActiveController
{
    public $modelClass = RacksBase::class;
//    public $racks = [
//        '1' => [
//            'Racks' => [
//                ["position" => ["x" => 42, "y" => 44],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Макароны",
//                    "fill" => "blue",
//                    "angle" => 0
//                ],
//                ["position" => ["x" => 42, "y" => 78],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "шоколад",
//                    "fill" => "blue",
//                    "angle" => 0],
//                ["position" => ["x" => 42, "y" => 114],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Консервы",
//                    "fill" => "blue",
//                    "angle" => 0],
//                ["position" => ["x" => 42, "y" => 150],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Крупа",
//                    "fill" => "blue",
//                    "angle" => 0],
//                ["position" => ["x" => 42, "y" => 186],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Яйцо",
//                    "fill" => "blue",
//                    "angle" => 0],
//                ["position" => ["x" => 42, "y" => 222],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Вода",
//                    "fill" => "blue",
//                    "angle" => 0],
//                ["position" => ["x" => 42, "y" => 258],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Бельё",
//                    "fill" => "blue",
//                    "angle" => 0],
//                ["position" => ["x" => 42, "y" => 294],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Мыло",
//                    "fill" => "blue",
//                    "angle" => 0],
//                ["position" => ["x" => 42, "y" => 330],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Кетчуп",
//                    "fill" => "blue",
//                    "angle" => 0],
//                ["position" => ["x" => 264, "y" => 42],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Сад",
//                    "fill" => "blue",
//                    "angle" => 0],
//                ["position" => ["x" => 264, "y" => 78],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Фасад",
//                    "fill" => "blue",
//                    "angle" => 0],
//                ["position" => ["x" => 264, "y" => 114],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Вата",
//                    "fill" => "blue",
//                    "angle" => 0],
//                ["position" => ["x" => 264, "y" => 150],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Шашлык",
//                    "fill" => "blue",
//                    "angle" => 0],
//                ["position" => ["x" => 264, "y" => 186],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Балык",
//                    "fill" => "blue",
//                    "angle" => 0],
//                ["position" => ["x" => 264, "y" => 222],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Затык",
//                    "fill" => "blue",
//                    "angle" => 0],
//                ["position" => ["x" => 264, "y" => 258],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Втык",
//                    "fill" => "blue",
//                    "angle" => 0],
//                ["position" => ["x" => 264, "y" => 294],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Утык",
//                    "fill" => "blue",
//                    "angle" => 0],
//                ["position" => ["x" => 264, "y" => 330],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Перетык",
//                    "fill" => "blue",
//                    "angle" => 0],
//                ["position" => ["x" => 234, "y" => 360],
//                    "width" => 30,
//                    "height" => 30,
//                    "label" => "Старт",
//                    "fill" => "#E74C3C",
//                    "angle" => 0]
//            ]
//        ],
//        '2' => [
//            'Racks' => [
//
//                ["position" => ["x" => 48, "y" => 162],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Кофе",
//                    "fill" => "blue",
//                    "angle" => 0,
//                    "top" => 3629],
//
//
//                ["position" => ["x" => 48, "y" => 198],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Кетчуп",
//                    "fill" => "blue",
//                    "angle" => 0,
//                    "top" => 5232],
//
//
//                ["position" => ["x" => 48, "y" => 234],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Консервы",
//                    "fill" => "blue",
//                    "angle" => 0,
//                    "top" => 9284],
//
//
//                ["position" => ["x" => 48, "y" => 126],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Чай",
//                    "fill" => "blue",
//                    "angle" => 0,
//                    "top" => 5875],
//
//
//                ["position" => ["x" => 48, "y" => 90],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Вино",
//                    "fill" => "blue",
//                    "angle" => 0,
//                    "top" => 4211],
//
//
//                ["position" => ["x" => 222, "y" => 182],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Вода",
//                    "fill" => "blue",
//                    "angle" => 270,
//                    "top" => 9631],
//
//
//                ["position" => ["x" => 48, "y" => 270],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Макароны",
//                    "fill" => "blue",
//                    "angle" => 0,
//                    "top" => 6483],
//
//
//                ["position" => ["x" => 264, "y" => 180],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Косметика",
//                    "fill" => "blue",
//                    "angle" => 270,
//                    "top" => 325],
//
//
//                ["position" => ["x" => 306, "y" => 180],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Хозтовары",
//                    "fill" => "blue",
//                    "angle" => 270,
//                    "top" => 462],
//
//
//                ["position" => ["x" => 348, "y" => 180],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Одежда",
//                    "fill" => "blue",
//                    "angle" => 270,
//                    "top" => 5583],
//
//
//                ["position" => ["x" => 390, "y" => 180],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Сад",
//                    "fill" => "blue",
//                    "angle" => 270,
//                    "top" => 6382],
//
//
//                ["position" => ["x" => 432, "y" => 180],
//                    "width" => 198,
//                    "height" => 18,
//                    "label" => "Видео",
//                    "fill" => "blue",
//                    "angle" => 270,
//                    "top" => 5103],
//
//
//                ["position" => ["x" => 270, "y" => 366],
//                    "width" => 30,
//                    "height" => 30,
//                    "label" => "Старт",
//                    "fill" => "#E74C3C",
//                    "angle" => 0,
//                    "top" => 2698],
//
//
//                ["position" => ["x" => 270, "y" => 252],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 9331],
//
//
//                ["position" => ["x" => 270, "y" => 216],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 6484],
//
//
//                ["position" => ["x" => 262, "y" => 168],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 12],
//
//
//                ["position" => ["x" => 270, "y" => 144],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 2095],
//
//
//                ["position" => ["x" => 270, "y" => 108],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 8135],
//
//
//                ["position" => ["x" => 270, "y" => 66],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 9842],
//
//
//                ["position" => ["x" => 330, "y" => 66],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 9277],
//
//
//                ["position" => ["x" => 378, "y" => 66],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 7092],
//
//
//                ["position" => ["x" => 420, "y" => 66],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 9390],
//
//
//                ["position" => ["x" => 462, "y" => 66],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 9417],
//
//
//                ["position" => ["x" => 504, "y" => 66],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 1704],
//
//
//                ["position" => ["x" => 552, "y" => 66],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 7327],
//
//
//                ["position" => ["x" => 270, "y" => 306],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 9834],
//
//
//                ["position" => ["x" => 330, "y" => 306],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 7394],
//
//
//                ["position" => ["x" => 378, "y" => 306],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 1829],
//
//
//                ["position" => ["x" => 420, "y" => 306],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 2456],
//
//
//                ["position" => ["x" => 458, "y" => 306],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 4010],
//
//
//                ["position" => ["x" => 504, "y" => 306],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 3362],
//
//
//                ["position" => ["x" => 552, "y" => 306],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 8053],
//
//
//                ["position" => ["x" => 18, "y" => 306],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 9999],
//
//
//                ["position" => ["x" => 16, "y" => 254],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 6496],
//
//
//                ["position" => ["x" => 12, "y" => 222],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 9475],
//
//
//                ["position" => ["x" => 12, "y" => 186],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 154],
//
//
//                ["position" => ["x" => 12, "y" => 144],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 6982],
//
//
//                ["position" => ["x" => 12, "y" => 114],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 3959],
//
//
//                ["position" => ["x" => 12, "y" => 68],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "black",
//                    "angle" => 0,
//                    "top" => 2515],
//
//
//                ["position" => ["x" => 132, "y" => 252],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "green",
//                    "angle" => 0,
//                    "top" => 2562],
//
//
//                ["position" => ["x" => 132, "y" => 216],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "green",
//                    "angle" => 0,
//                    "top" => 6825],
//
//
//                ["position" => ["x" => 132, "y" => 180],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "green",
//                    "angle" => 0,
//                    "top" => 9255],
//
//
//                ["position" => ["x" => 132, "y" => 144],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "green",
//                    "angle" => 0,
//                    "top" => 6807],
//
//
//                ["position" => ["x" => 132, "y" => 108],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "green",
//                    "angle" => 0,
//                    "top" => 8759],
//
//
//                ["position" => ["x" => 132, "y" => 66],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "green",
//                    "angle" => 0,
//                    "top" => 1416],
//
//
//                ["position" => ["x" => 334, "y" => 158],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "green",
//                    "angle" => 0,
//                    "top" => 3503],
//
//
//                ["position" => ["x" => 378, "y" => 158],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "green",
//                    "angle" => 0,
//                    "top" => 955],
//
//
//                ["position" => ["x" => 420, "y" => 158],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "green",
//                    "angle" => 0,
//                    "top" => 4880],
//
//
//                ["position" => ["x" => 462, "y" => 160],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "green",
//                    "angle" => 0,
//                    "top" => 2979],
//
//
//                ["position" => ["x" => 504, "y" => 162],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "green",
//                    "angle" => 0,
//                    "top" => 743],
//
//
//                ["position" => ["x" => 294, "y" => 204],
//                    "width" => 15,
//                    "height" => 15,
//                    "label" => "",
//                    "fill" => "green",
//                    "angle" => 0,
//                    "top" => 4552],
//
//            ],
//        ],
//        '3' => [
//            'Racks' => [
//                [
//                    "position"=> ["x"=> 78, "y"=> 318],
//                    "width"=> 198,
//                    "height"=> 18,
//                    "label"=> "Макароны",
//                    "fill"=> "blue",
//                    "angle"=> 0,
//                    "top"=> 7114,
//                ],
//                [
//                    "position"=> ["x"=> 78, "y"=> 264],
//                    "width"=> 198,
//                    "height"=> 18,
//                    "label"=> "Шоколад",
//                    "fill"=> "blue",
//                    "angle"=> 0,
//                    "top"=> 3025,
//                ],
//                [
//                    "position"=> ["x"=> 78, "y"=> 206],
//                    "width"=> 198,
//                    "height"=> 18,
//                    "label"=> "Вода",
//                    "fill"=> "blue",
//                    "angle"=> 0,
//                    "top"=> 7200,
//                ],
//                [
//                    "position"=> ["x"=> 78, "y"=> 144],
//                    "width"=> 198,
//                    "height"=> 18,
//                    "label"=> "Кетчуп",
//                    "fill"=> "blue",
//                    "angle"=> 0,
//                    "top"=> 5378,
//                ],
//                [
//                    "position"=> ["x"=> 324, "y"=> 144],
//                    "width"=> 198,
//                    "height"=> 18,
//                    "label"=> "Видео",
//                    "fill"=> "blue",
//                    "angle"=> 0,
//                    "top"=> 7602,
//                ],
//                [
//                    "position"=> ["x"=> 324, "y"=> 204],
//                    "width"=> 198,
//                    "height"=> 18,
//                    "label"=> "Консервы",
//                    "fill"=> "blue",
//                    "angle"=> 0,
//                    "top"=> 5719,
//                ],
//                [
//                    "position"=> ["x"=> 324, "y"=> 264],
//                    "width"=> 198,
//                    "height"=> 18,
//                    "label"=> "Чай",
//                    "fill"=> "blue",
//                    "angle"=> 0,
//                    "top"=> 6229,
//                ],
//                [
//                    "position"=> ["x"=> 324, "y"=> 318],
//                    "width"=> 198,
//                    "height"=> 18,
//                    "label"=> "Конфеты",
//                    "fill"=> "blue",
//                    "angle"=> 0,
//                    "top"=> 404,
//                ],
//                [
//                    "position"=> ["x"=> 288, "y"=> 348],
//                    "width"=> 30,
//                    "height"=> 30,
//                    "label"=> "Старт",
//                    "fill"=> "#E74C3C",
//                    "angle"=> 0,
//                    "top"=> 551,
//                ],
//                [
//                    "position"=> ["x"=> 38, "y"=> 350],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "black",
//                    "angle"=> 0,
//                    "top"=> 2105,
//                ],
//                [
//                    "position"=> ["x"=> 294, "y"=> 294],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "black",
//                    "angle"=> 0,
//                    "top"=> 1191,
//                ],
//                [
//                    "position"=> ["x"=> 290, "y"=> 236],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "black",
//                    "angle"=> 0,
//                    "top"=> 2095,
//                ],
//                [
//                    "position"=> ["x"=> 288, "y"=> 114],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "black",
//                    "angle"=> 0,
//                    "top"=> 8685,
//                ],
//                [
//                    "position"=> ["x"=> 36, "y"=> 288],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "black",
//                    "angle"=> 0,
//                    "top"=> 6215,
//                ],
//                [
//                    "position"=> ["x"=> 30, "y"=> 234],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "black",
//                    "angle"=> 0,
//                    "top"=> 1603,
//                ],
//                [
//                    "position"=> ["x"=> 30, "y"=> 174],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "black",
//                    "angle"=> 0,
//                    "top"=> 6996,
//                ],
//                [
//                    "position"=> ["x"=> 24, "y"=> 114],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "black",
//                    "angle"=> 0,
//                    "top"=> 6101,
//                ],
//                [
//                    "position"=> ["x"=> 534, "y"=> 354],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "black",
//                    "angle"=> 0,
//                    "top"=> 2303,
//                ],
//                [
//                    "position"=> ["x"=> 534, "y"=> 294],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "black",
//                    "angle"=> 0,
//                    "top"=> 7117,
//                ],
//                [
//                    "position"=> ["x"=> 534, "y"=> 228],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "black",
//                    "angle"=> 0,
//                    "top"=> 2624,
//                ],
//                [
//                    "position"=> ["x"=> 528, "y"=> 174],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "black",
//                    "angle"=> 0,
//                    "top"=> 7314,
//                ],
//                [
//                    "position"=> ["x"=> 528, "y"=> 102],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "black",
//                    "angle"=> 0,
//                    "top"=> 8513,
//                ],
//                [
//                    "position"=> ["x"=> 168, "y"=> 294],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "green",
//                    "angle"=> 0,
//                    "top"=> 9364,
//                ],
//                [
//                    "position"=> ["x"=> 420, "y"=> 288],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "green",
//                    "angle"=> 0,
//                    "top"=> 3191,
//                ],
//                [
//                    "position"=> ["x"=> 414, "y"=> 234],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "green",
//                    "angle"=> 0,
//                    "top"=> 486,
//                ],
//                [
//                    "position"=> ["x"=> 414, "y"=> 180],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "green",
//                    "angle"=> 0,
//                    "top"=> 2619,
//                ],
//                [
//                    "position"=> ["x"=> 408, "y"=> 102],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "green",
//                    "angle"=> 0,
//                    "top"=> 7506,
//                ],
//                [
//                    "position"=> ["x"=> 162, "y"=> 240],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "green",
//                    "angle"=> 0,
//                    "top"=> 7503,
//                ],
//                [
//                    "position"=> ["x"=> 156, "y"=> 174],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "green",
//                    "angle"=> 0,
//                    "top"=> 3099,
//                ],
//                [
//                    "position"=> ["x"=> 156, "y"=> 102],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "green",
//                    "angle"=> 0,
//                    "top"=> 1590,
//                ],
//                [
//                    "position"=> ["x"=> 288, "y"=> 180],
//                    "width"=> 15,
//                    "height"=> 15,
//                    "label"=> "",
//                    "fill"=> "black",
//                    "angle"=> 0,
//                    "top"=> 1050,
//                ],
//            ]
//        ]
//    ];

    public function init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;
        \Yii::$app->user->enableAutoLogin = false;
    }

//    public function actionIndex(string $id)
//    {
//        if (\Yii::$app->request->isPost) {
//
////            return $this->racks[$id];,
////            return '{Status: OK}';,
//            return \Yii::$app->request->post();
//        }
//
//        return $this->racks[$id];
//    }
//    public function actions()
//    {
//        $actions = parent::actions();
//        unset($actions['create']);
//        return $actions;
//    }
//    public function actionCreate()
//    {
//        return \Yii::$app->request->post()[0];
//    }
}
