<?php
/**
 * Created by
 * User: Wisard17
 * Date: 15/07/2018
 * Time: 06.04 PM
 */

namespace app\smartadmin\assets\plugins;


use yii\web\AssetBundle;

/**
 * Class HighChart
 * @package app\assets\highchart
 */
class HighChartAssets extends AssetBundle
{
    public $sourcePath = '@app/smartadmin/resources/assets/';

    public $css = [
    ];

    public $js = [
        'js/plugin/highchart/highcharts.js',
//        'js/plugin/modules/data.js',
//        'js/plugin/modules/drilldown.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}