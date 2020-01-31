<?php


namespace app\assets;


use yii\web\AssetBundle;

class VueAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        './css/chunk-vendors.7ff6960d.css',
        './css/app.c0dbb0d5.css',
    ];
    public $js = [
        'js/chunk-vendors.9d02e274.js',
        'js/app.059ec15f.js'
        ];
    public function init()
    {
        parent::init();

//        $this->js[] = YII_ENV === 'dev' ? './js/app.b22ce679862c47a75225.js' : './js/app.b22ce679862c47a75225.js';
    }
}