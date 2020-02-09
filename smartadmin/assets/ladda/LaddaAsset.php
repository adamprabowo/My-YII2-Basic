<?php
/**
 * Created by PhpStorm.
 * User: wisard17
 * Date: 5/9/2017
 * Time: 4:32 PM
 */

namespace app\smartadmin\assets\ladda;

use yii\web\AssetBundle;

/**
 * Class LaddaAssetAsset
 * @package app\smartadmin\assets
 */
class LaddaAsset extends AssetBundle
{
    public $sourcePath = '@app/smartadmin/assets/ladda/dist';

    public $css = [
        'ladda-themeless.min.css',

    ];

    public $js = [
        'spin.min.js',
        'ladda.min.js',
//        'ladda.jquery.min.js',
    ];

    public $depends = [
        'app\smartadmin\assets\PaceAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'xutl\fontawesome\Asset',
        'yii\jui\JuiAsset',
        'yii\web\YiiAsset',
    ];
}