<?php
/**
 * Created by
 * User: Wisard17
 * Date: 31/01/2018
 * Time: 01.05 PM
 */

namespace app\smartadmin\assets\plugins;


use yii\web\AssetBundle;

class FontawesomeAssets extends AssetBundle
{
    public $sourcePath = '@app/smartadmin/resources/assets';

    public $css = [
        'css/font-awesome.min.css',
    ];

    public $js = [
    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}