<?php
/**
 * Created by PhpStorm.
 * User: Wisard17
 * Date: 8/1/2017
 * Time: 4:21 PM
 */

namespace app\smartadmin\assets\plugins;

use yii\web\AssetBundle;

class ChartAsset extends AssetBundle
{
    public $sourcePath = '@app/smartadmin/resources/assets';

    public $css = [
        'js/plugin/vectormap/jquery-jvectormap-1.2.2.css'
    ];

    public $js = [
        // Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip
        'js/plugin/flot/jquery.flot.cust.min.js',
        'js/plugin/flot/jquery.flot.resize.min.js',
        'js/plugin/flot/jquery.flot.time.min.js',
        'js/plugin/flot/jquery.flot.tooltip.min.js',
        // Vector Maps Plugin: Vectormap engine, Vectormap language
        'js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js',
        'js/plugin/vectormap/jquery-jvectormap-world-mill-en.js',
        // EASY PIE CHARTS
        'js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js',
        // SPARKLINES
        'js/plugin/sparkline/jquery.sparkline.min.js',


    ];

    public $depends = [
        'app\smartadmin\assets\LayoutAsset',
    ];
}