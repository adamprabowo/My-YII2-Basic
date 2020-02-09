<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace app\smartadmin\assets;

/**
 * @author Tongle Xu <xutongle@gmail.com>
 * @since 3.0
 */
class LoginAsset extends LayoutAsset
{
    public $sourcePath = '@app/smartadmin/resources/assets';

    public $js = [
        'js/app.config.js',
        'js/plugins/jquery-touch/jquery.ui.touch-punch.min.js',
        'js/app.js',
    ];
}