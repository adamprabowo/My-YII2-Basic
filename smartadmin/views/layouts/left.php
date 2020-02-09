<?php
/* @var $this \yii\web\View */

use app\smartadmin\SideBar;

// use yuncms\admin\helpers\MenuHelper;
?>

<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->
					<a href="javascript:void(0);" id="show-shortcut" data-action="#">
                        <img src="<?= $asset->baseUrl; ?>/img1/user.jpg" alt="me" class="online">
						<span> 
							 Administrator
						</span>
                        <i class="fa fa-angle-down"></i>
                    </a>

				</span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive-->

    <?php
    SideBar::begin();
    echo SideBar::widget(\app\models\Menu::listMenu());
    SideBar::end();
    ?>

    <span class="minifyme" data-action="minifyMenu">
        <i class="fa fa-arrow-circle-left hit"></i>
    </span>

</aside>
