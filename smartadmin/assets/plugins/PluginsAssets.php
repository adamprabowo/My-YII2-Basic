<?php


namespace app\smartadmin\assets\plugins;

use yii\web\AssetBundle;

class PluginsAssets extends AssetBundle
{
    public $sourcePath = '@app/smartadmin/resources/assets/plugins';

    public $css = [
        'w3css/w3.css',
        'holdon/HoldOn.css',
        'select2/css/select2.min.css',
    ];

    public $js = [
        'holdon/HoldOn.js',
        'angular/angular.min.js',
        'angular/angular-route.min.js',
        'select2/js/select2.min.js',
    ];

    public $depends = [
        'app\smartadmin\assets\LayoutAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}