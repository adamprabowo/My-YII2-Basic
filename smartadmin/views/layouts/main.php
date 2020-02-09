<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\smartadmin\Alert;
use app\smartadmin\assets\LayoutAsset;
use app\smartadmin\MainBreadcrumbs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;


$asset = LayoutAsset::register($this);
app\smartadmin\assets\plugins\PluginsAssets::register($this);


//Meta
$this->registerMetaTag(['charset' => Yii::$app->charset]);
//$this->registerMetaTag(['http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge,chrome=1']);
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no']);
$this->registerMetaTag(['name' => 'description', 'content' => 'TintSoft']);
$this->registerMetaTag(['name' => 'author', 'content' => 'TintSoft Team']);

//Startup image for web apps
$this->registerLinkTag(['rel' => 'apple-touch-startup-image', 'href' => $asset->baseUrl . '/img/splash/ipad-landscape.png', 'media' => 'screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)']);
$this->registerLinkTag(['rel' => 'apple-touch-startup-image', 'href' => $asset->baseUrl . '/img/splash/ipad-portrait.png', 'media' => 'screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)']);
$this->registerMetaTag(['rel' => 'apple-touch-startup-image', 'href' => $asset->baseUrl . '/img/splash/iphone.png', 'media' => 'screen and (max-device-width: 320px)']);

$jui_pic = $asset->baseUrl . '/img/jqueryui/ui-icons_555555_256x240.png';
$this->registerCss("

.ui-datepicker-header .ui-datepicker-prev span{
    background-image: url($jui_pic)!important;background-position: -80px -192px!important;

    text-indent: -99999px!important;
    white-space: nowrap;
    overflow: hidden;
}

.ui-datepicker-header .ui-datepicker-next span{
    background-image: url($jui_pic)!important;background-position: -49px -192px!important;

    text-indent: -99999px!important;
    white-space: nowrap;
    overflow: hidden;
}

");
?>
<?php $this->beginPage() ?><!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <?= Html::tag('title', Html::encode($this->title)); ?>
        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>

        <!--js-php-setting-->
        <script type="text/javascript">
            base_url = "<?php echo Url::base('');?>";
            public_host = base_url+"<?php echo Yii::$app->urlManager->createUrl('/');?>";

        </script>
        <!--js-php-setting-->

    </head>

    <!--

    TABLE OF CONTENTS.

    Use search to find needed section.

    ===================================================================

    |  01. #CSS Links                |  all CSS links and file paths  |
    |  02. #FAVICONS                 |  Favicon links and file paths  |
    |  03. #GOOGLE FONT              |  Google font link              |
    |  04. #APP SCREEN / ICONS       |  app icons, screen backdrops   |
    |  05. #BODY                     |  body tag                      |
    |  06. #HEADER                   |  header tag                    |
    |  07. #PROJECTS                 |  project lists                 |
    |  08. #TOGGLE LAYOUT BUTTONS    |  layout buttons and actions    |
    |  09. #MOBILE                   |  mobile view dropdown          |
    |  10. #SEARCH                   |  search field                  |
    |  11. #NAVIGATION               |  left panel & navigation       |
    |  12. #RIGHT PANEL              |  right panel userlist          |
    |  13. #MAIN PANEL               |  main panel                    |
    |  14. #MAIN CONTENT             |  content holder                |
    |  15. #PAGE FOOTER              |  page footer                   |
    |  16. #SHORTCUT AREA            |  dropdown shortcuts area       |
    |  17. #PLUGINS                  |  all scripts and plugins       |

    ===================================================================

    -->

    <!-- #BODY -->
    <!-- Possible Classes

        * 'smart-style-{SKIN#}'
        * 'smart-rtl'         - Switch theme mode to RTL
        * 'menu-on-top'       - Switch to top navigation (no DOM change required)
        * 'no-menu'			  - Hides the menu completely
        * 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
        * 'fixed-header'      - Fixes the header
        * 'fixed-navigation'  - Fixes the main menu
        * 'fixed-ribbon'      - Fixes breadcrumb
        * 'fixed-page-footer' - Fixes footer
        * 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
    -->
    <body class="smart-style-0">
    <?php $this->beginBody() ?>
    <!-- HEADER -->
    <?= $this->render(
        'header.php', ['asset' => $asset]
    ) ?>
    <!-- END HEADER -->

    <!-- Left panel : Navigation area -->
    <?= $this->render(
        'left.php', ['asset' => $asset]
    ) ?>
    <!-- END NAVIGATION -->

    <!-- MAIN PANEL -->
    <div id="main" role="main">

        <!-- RIBBON -->
        <div id="ribbon">

				<span class="ribbon-button-alignment">
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets"
                          data-title="Refresh"
                          rel="tooltip" data-placement="bottom"
                          data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings."
                          data-html="true">
						<i class="fa fa-refresh"></i>
					</span>
				</span>

            <!-- breadcrumb -->
            <?= Breadcrumbs::widget([
                'tag' => 'ol',
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <!-- end breadcrumb -->

            <!-- You can also add more buttons to the
            ribbon for further usability

            Example below:

            <span class="ribbon-button-alignment pull-right">
                <a class="btn btn-ribbon hidden-xs" href="http://f.l68.net" target="_blank"><i class="fa-plus"></i> Home</a>

            <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i
                    class="fa-grid"></i> Change Grid</span>
            <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
            <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span
                    class="hidden-mobile">Search</span></span>
            </span> -->

        </div>
        <!-- END RIBBON -->

        <!-- MAIN CONTENT -->
        <div id="content">

            <?= $content ?>

        </div>
        <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->


    <?= \yii\bootstrap\Modal::widget([
        'id' => 'modal-temp',
        'options' => ['tabindex' => false],
    ])?>

    <?= \yii\bootstrap\Modal::widget([
        'id' => 'modal-temp-large',
        'options' => ['tabindex' => false],
    ])?>

    <!-- PAGE FOOTER -->
    <?= $this->render(
        'footer.php', ['asset' => $asset]
    ) ?>
    <!-- END PAGE FOOTER -->

    <!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
    Note: These tiles are completely responsive,
    you can add as many as you like
    -->
    <div id="shortcut">
        <?= \app\modules\users\models\ProfileMenu::renderMenuProfile()?>
    </div>
    <!-- END SHORTCUT AREA -->
    <?php $this->endBody() ?>

    </body>
    </html>
<?php $this->endPage() ?>
