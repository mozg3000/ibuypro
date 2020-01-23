<?php


namespace app\assets;


use yii\web\AssetBundle;

class VueAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        './css/chunk-vendors.55c50dfa.css',
        './css/app.f8fdae43.css',
    ];
    public $js = [
        'js/chunk-vendors.9d02e274.js',
        'js/app.21b90c1e.js'
        ];
    public function init()
    {
        parent::init();

//        $this->js[] = YII_ENV === 'dev' ? './js/app.b22ce679862c47a75225.js' : './js/app.b22ce679862c47a75225.js';
    }
}