<?php


use app\smartadmin\ActiveForm;
use app\smartadmin\assets\LayoutAsset;
use yii\helpers\Html;
use yii\web\View;

$asset = LayoutAsset::register($this);

$this->title = 'Login';

?>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
        <h1 class="txt-color-red login-header-big">
            
            <br>
<!--            <small> Internal Laboratory System</small>-->
        </h1>
        <!-- <h3 class="login-header-big"></h3> -->
        <div class="hero">

            <!-- <div class="pull-left login-desc-box-l">
                <h4 class="paragraph-header">It's Okay to be Smart. Experience the simplicity of SmartAdmin, everywhere you go!</h4>
                <div class="login-app-icons">
                    <a href="javascript:void(0);" class="btn btn-danger btn-sm">Frontend Template</a>
                    <a href="javascript:void(0);" class="btn btn-danger btn-sm">Find out more</a>
                </div>
            </div> -->

            <img src="<?= $asset->baseUrl; ?>/img/cover.png" class="pull-right" alt=""
                 style="width:70%;margin-top: -30px;margin-right: 30px">

        </div>

        <!-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h5 class="about-heading">About SmartAdmin - Are you up to date?</h5>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h5 class="about-heading">Not just your average template!</h5>
                <p>
                    Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi voluptatem accusantium!
                </p>
            </div>
        </div> -->

    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
        <div class="well no-padding">


            <?php $form = ActiveForm::begin([
                'id' => 'login-form2',
                'fieldConfig' => [
                    // 'template' => "{label}\n<div class=\"input\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    'labelOptions' => ['class' => 'label'],
                ],
            ]); ?>
            <header>
                Sign In
            </header>
            <fieldset>
                <?= $form->field($model, 'username',
                    [
                        "template" => "{label}\n<div class=\"input\"><i class=\"icon-append fa fa-user\"></i>{input}<b class=\"tooltip tooltip-top-right\"><i class=\"fa fa-user txt-color-teal\"></i> Please enter username</b>\n<div class=\"col-lg-8\">{error}</div>"
                    ])->textInput(['autofocus' => true]) ?><br/>

                <?= $form->field($model, 'password',
                    [
                        "template" => "{label}\n<div class=\"input\"><i class=\"icon-append fa fa-lock\"></i>{input}<b class=\"tooltip tooltip-top-right\"><i class=\"fa fa-lock txt-color-teal\"></i> Please enter password</b>\n<div class=\"col-lg-8\">{error}</div>"
                    ])->passwordInput() ?><br/>

                <?= $form->field($model, 'rememberMe')->checkbox() ?><br/>
                <?= Html::a('<small>Forgot password?</small>', ['/site/request-password-reset']) ?>
            </fieldset>
            <footer>
                <!-- <div class="col-lg-offset-1 col-lg-11"> -->

                <?= Html::submitButton('Sign in', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                <!-- </div> -->
            </footer>

            <?php ActiveForm::end(); ?>

        </div>

        <!-- <h5 class="text-center"> - Or sign in using -</h5>

                        <ul class="list-inline text-center">
                            <li>
                                <a href="javascript:void(0);" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul> -->

    </div>
</div>

<!-- END MAIN PANEL -->
<!-- ==========================CONTENT ENDS HERE ========================== -->

<!-- PAGE RELATED PLUGIN(S) 
<script src="..."></script>-->

<?php

$jsScript = <<< JS
          $("#login-form2").validate({
            // Rules for form validation
            rules : {
                username : {
                    required : true
                },
                password : {
                    required : true,
                    minlength : 3,
                    maxlength : 20
                }
            },

            // Messages for form validation
            messages : {
                username : {
                    required : 'Please enter your username'
                },
                password : {
                    required : 'Please enter your password'
                }
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });
JS;
$this->registerJs("
        $jsScript;
        
        ", View::POS_END, 'runLogin');
?>

