<?php
/**
 * Created by
 * User: Wisard17
 * Date: 8/1/2017
 * Time: 4:21 PM
 */

namespace app\smartadmin\assets\plugins;

use yii\web\AssetBundle;

class FileDownloadAssets extends AssetBundle
{
    public $sourcePath = '@app/smartadmin/resources/assets';

    public $css = [
    ];

    public $js = [
        "plugins/file-download/jquery.fileDownload.js",
    ];

    public $depends = [
        'app\smartadmin\assets\LayoutAsset',
    ];
}