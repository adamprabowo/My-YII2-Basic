<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace app\smartadmin\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LayoutAsset extends AssetBundle
{
    public $sourcePath = '@app/smartadmin/resources/assets';

    public $css = [

        //SmartAdmin Styles : Caution! DO NOT change the order
        'css/smartadmin-production-plugins.min.css',
        'css/smartadmin-production.min.css',
        'css/smartadmin-skins.min.css',

        //SmartAdmin RTL Support
        'css/smartadmin-rtl.min.css',
        'css/style.css',
        // GOOGLE FONT
        'css/open-sans.css',
        //'http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700',
    ];

    public $js = [
        'js/app.config.js',
        'js/plugins/jquery-touch/jquery.ui.touch-punch.min.js',
        'js/notification/SmartNotification.min.js',
        'js/smartwidgets/jarvis.widget.min.js',
        'js/plugins/msie-fix/jquery.mb.browser.min.js',
        'js/plugins/fastclick/fastclick.min.js',
        'js/plugin/summernote/summernote.min.js',
        'js/app.js',
        'js/plugin/sparkline/jquery.sparkline.min.js',
//        'js/style.js',
        'js/speech/voicecommand.min.js',
        //'js/smart-chat-ui/smart.chat.ui.min.js',
        'js/smart-chat-ui/smart.chat.manager.min.js',
        'js/plugin/jquery-validate/jquery.validate.min.js',
        'js/plugin/masked-input/jquery.maskedinput.min.js',
    ];

    public $depends = [
        'app\smartadmin\assets\PaceAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'app\smartadmin\assets\plugins\FontawesomeAssets',
        'yii\jui\JuiAsset',
        'yii\web\YiiAsset',

    ];
}