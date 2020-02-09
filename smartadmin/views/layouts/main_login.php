<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\smartadmin\assets\LayoutAsset;
use yii\helpers\Html;
use app\smartadmin\Alert;

$asset = LayoutAsset::register($this);

$this->registerMetaTag(['charset' => Yii::$app->charset]);
//$this->registerMetaTag(['http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge,chrome=1']);
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no']);
$this->registerMetaTag(['name' => 'description', 'content' => 'TintSoft']);
$this->registerMetaTag(['name' => 'author', 'content' => 'TintSoft Team']);

//Startup image for web apps
$this->registerLinkTag(['rel' => 'apple-touch-startup-image', 'href' => $asset->baseUrl . '/img/splash/ipad-landscape.png', 'media' => 'screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)']);
$this->registerLinkTag(['rel' => 'apple-touch-startup-image', 'href' => $asset->baseUrl . '/img/splash/ipad-portrait.png', 'media' => 'screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)']);
$this->registerMetaTag(['rel' => 'apple-touch-startup-image', 'href' => $asset->baseUrl . '/img/splash/iphone.png', 'media' => 'screen and (max-device-width: 320px)']);
?>
<?php $this->beginPage() ?><!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <?= Html::tag('title', Html::encode($this->title)); ?>
        <?php $this->head() ?>

    </head>

    <body id="extr-page" class="animated fadeInDown">
    <?php $this->beginBody() ?>

    <header id="header">
        <!--<span id="logo"></span>-->

        <div id="logo-group">
            <span id="logo">

            </span>

            <!-- END AJAX-DROPDOWN -->
        </div>

        <!-- <span id="extr-page-header-space"> <span class="hidden-mobile hiddex-xs">Need an account?</span>
        <a href="#" class="btn btn-danger">Create account</a> </span> -->

    </header>

    <!-- MAIN PANEL -->
    <div id="main" role="main">

        <!-- MAIN CONTENT -->
        <div id="content" class="container">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
        <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->

    <?php $this->endBody() ?>

    </body>
    </html>
<?php $this->endPage() ?>