<?php


namespace app\assets;


use yii\web\AssetBundle;

class VueAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        './css/app.30790115300ab27614ce176899523b62.css'
    ];
    public $js = [
        'js/about.8cdd73dd.js',
        'js/chunk-vendors.9083c1d3.js',
        'js/app.3af22400.js'
        ];
    public function init()
    {
        parent::init();

//        $this->js[] = YII_ENV === 'dev' ? './js/app.b22ce679862c47a75225.js' : './js/app.b22ce679862c47a75225.js';
    }
}