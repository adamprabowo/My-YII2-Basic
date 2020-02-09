<?php
/**
 * Created by
 * User: Wisard17
 * Date: 25/11/2017
 * Time: 07.14 PM
 */

namespace app\modules\users\models;


use Yii;
use yii\bootstrap\Widget;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * Class ProfileMenu
 * @package app\modules\users\models
 */
class ProfileMenu extends Widget
{

    /**
     * @return string
     */
    public static function renderMenuProfile()
    {
        $out = '';

        $out .= Html::tag('li', Html::a('<span
                            class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span>',
            ['/users/default/profile', 'username' => Yii::$app->user->id],
            ['class' => 'jarvismetro-tile big-cubes selected bg-color-pinkDark']));

        $out .= Html::tag('li', Html::a('<span
                            class="iconbox"> <i class="fa fa-exchange fa-4x"></i> <span style="font-size: x-small;
                            text-align: center;">Change Password </span> </span>',
            ['/site/change-password'],
            ['class' => 'jarvismetro-tile big-cubes bg-color-blueDark']));

        $out .= Html::tag('li', Html::a('<span
                            class="iconbox"> <i class="fa fa-sign-out fa-4x"></i> <span style="font-size: small;
                            text-align: center;">Logout </span></span>', Url::toRoute(['/site/logout']), [
            'title' => 'Sign Out',
            'data' => [
                'method' => 'post',
                'confirm' => 'You can improve your security further after logging out by closing this opened browser'
            ],
            'class' => 'jarvismetro-tile big-cubes bg-color-blueDark'
        ]));

        return Html::tag('ul', $out);


    }


}