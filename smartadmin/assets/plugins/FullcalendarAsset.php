<?php
/**
 * Created by PhpStorm.
 * User: Wisard17
 * Date: 8/1/2017
 * Time: 4:21 PM
 */

namespace app\smartadmin\assets\plugins;

use yii\web\AssetBundle;

class FullcalendarAsset extends AssetBundle
{
    public $sourcePath = '@app/smartadmin/resources/assets';

    public $css = [
    ];

    public $js = [

        'js/plugin/moment/moment.min.js',
        'js/plugin/fullcalendar/jquery.fullcalendar.min.js',

    ];

    public $depends = [
        'app\smartadmin\assets\LayoutAsset',
    ];
}