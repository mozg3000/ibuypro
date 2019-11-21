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
        './js/manifest.2ae2e69a05c33dfc65f8.js',
        './js/vendor.e00e51762311e00a2108.js',
        './js/app.b22ce679862c47a75225.js'
        ];
    public function init()
    {
        parent::init();

//        $this->js[] = YII_ENV === 'dev' ? './js/app.b22ce679862c47a75225.js' : './js/app.b22ce679862c47a75225.js';
    }
}