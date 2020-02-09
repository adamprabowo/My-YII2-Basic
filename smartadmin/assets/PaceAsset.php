<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace app\smartadmin\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author Tongle Xu <xutongle@gmail.com>
 * @since 3.0
 */
class PaceAsset extends AssetBundle
{
    public $sourcePath = '@app/smartadmin/resources/assets';

    /**
     * 发布参数
     *
     * @var array
     */
    public $jsOptions = [
        'position' => View::POS_HEAD,
        'data-pace-options' => ['restartOnRequestAfter' => true]
    ];

    public $js = [
        'js/plugins/pace/pace.min.js'
    ];
}