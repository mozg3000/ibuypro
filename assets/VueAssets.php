<?php


namespace app\assets;


use yii\web\AssetBundle;

class VueAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        './css/chunk-vendors.cbe827ad.css',
        './css/app.dd1b4faf.css',
    ];
    public $js = [
        'js/chunk-vendors.39e84bef.js',
        'js/app.af37c91c.js'
        ];
    public function init()
    {
        parent::init();

//        $this->js[] = YII_ENV === 'dev' ? './js/app.b22ce679862c47a75225.js' : './js/app.b22ce679862c47a75225.js';
    }
}