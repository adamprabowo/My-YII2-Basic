<?php
/* @var $this \yii\web\View */

/* @var $asset \yii\web\AssetBundle */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<header id="header">
    <div id="logo-group">

        <!-- PLACE YOUR LOGO HERE -->
        <span id="logo">
        <!-- <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="268px" height="55px" viewBox="0 0 268 55" enable-background="new 0 0 268 55" xml:space="preserve">
            <image id="image0"  height="35" x="0" y="0"xlink:href="data:image/png;base64,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
MjctMDc6MDBSxYuPAAAAAElFTkSuQmCC" />
</svg> -->
        </span>
        <!-- END LOGO PLACEHOLDER -->

        
    </div>


    <!-- pulled right: nav area -->
    <div class="pull-right">

        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu"
                      title="Collapse Menu"><i
                            class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->

        <!-- #MOBILE -->
        <!-- Top menu profile link : this shows only when top menu is active -->
        <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
            <li class="">
                <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
                    <img src="<?= $asset->baseUrl; ?>/img1/user.jpg" alt="me" class="online"/>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i
                                    class="fa fa-cog"></i> Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?= Url::toRoute(['/users/default/profile', 'username' => Yii::$app->user->id])?>" class="padding-10 padding-top-0 padding-bottom-0"> <i
                                    class="fa fa-user"></i> <u>P</u>rofile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?= Url::toRoute(['/site/change-password'])?>" class="padding-10 padding-top-0 padding-bottom-0"
                           data-action="toggleShortcut"><i
                                    class="fa fa-exchange"></i> Change Password</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"
                           data-action="toggleShortcut"><i
                                    class="fa fa-arrow-down"></i> Shortcut</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"
                           data-action="launchFullscreen"><i
                                    class="fa fa-arrows-alt"></i> Full Screen</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <?= Html::a('<i class="fa fa-sign-out fa-lg"></i>Logout', Url::to(['/site/logout']), [
                            'class' => 'padding-10 padding-top-0 padding-bottom-0',
                            'title' => 'Sign Out',
                            'data' => [
                                'method' => 'post',
                                'confirm' => 'You can improve your security further after logging out by closing this opened browser'
                            ]
                        ]); ?>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- logout button -->
        
        <!-- end logout button -->

        <!-- search mobile button (this is hidden till mobile view port) -->
        <div id="search-mobile" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
        </div>
        <!-- end search mobile button -->

        <!-- input: search field -->
        <form action="<?= Url::toRoute('/search') ?>" class="header-search pull-right">
            <input id="search-fld" type="text" name="param" placeholder="Find reports and more" data-autocomplete='[
					"ActionScript",
					"AppleScript",
					"Asp",
					"BASIC",
					"C",
					"C++",
					"Clojure",
					"COBOL",
					"ColdFusion",
					"Erlang",
					"Fortran",
					"Groovy",
					"Haskell",
					"Java",
					"JavaScript",
					"Lisp",
					"Perl",
					"PHP",
					"Python",
					"Ruby",
					"Scala",
					"Scheme"]'>
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
            <a href="javascript:void(0);" id="cancel-search-js"
               title="Cancel Search"><i
                        class="fa fa-times"></i></a>
        </form>
        <!-- end input: search field -->

        <!-- fullscreen button -->
        <div id="fullscreen" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0);" data-action="launchFullscreen"
                      title="Full Screen"><i
                            class="fa fa-arrows-alt"></i></a> </span>
        </div>
        <!-- end fullscreen button -->


    </div>
    <!-- end pulled right: nav area -->
</header>
