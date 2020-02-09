<?php
/**
 * Created by PhpStorm.
 * User: Wisard17
 * Date: 8/1/2017
 * Time: 4:21 PM
 */

namespace app\smartadmin\assets\plugins;

use yii\web\AssetBundle;

class DataTableAsset extends AssetBundle
{
    public $sourcePath = '@app/smartadmin/resources/assets';

    public $css = [
    ];

    public $js = [
        "js/plugin/datatables/jquery.dataTables.min.js",
        "js/plugin/datatables/dataTables.colVis.min.js",
        "js/plugin/datatables/dataTables.tableTools.min.js",
        "js/plugin/datatables/dataTables.bootstrap.min.js",
        "js/plugin/datatable-responsive/datatables.responsive.min.js",
        "js/plugin/datatables/dataTables.fixedHeader.min.js",
    ];

    public $depends = [
        'app\smartadmin\assets\LayoutAsset',
    ];
}