<?php
/**
 * Created by:
 * User: Adam
 * Date: 09/02/2020
 * Time: 2:10 PM
 */
use app\smartadmin\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

/* @var $form ActiveForm */
?>
    <div class="add-_form">

<?php $form = ActiveForm::begin([
    'id' => 'po-form',
    'enableAjaxValidation' => Yii::$app->request->isAjax,
//        'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}<label class='input'>{input}</label>{error}",
//            'labelOptions' => ['class' => 'label  '],
        'inputOptions' => ['class' => 'form-control'],
    ],
    'options' => [
        'class' => 'smart-form',
    ],
]);

$url=Url::toRoute(['/inventory/incoming/add']);
?>

    <div class="add-form">
        <fieldset>

               <section >
                    <?= $form->field($model,'item') ?>
                </section> 

            <div class="row">

                <section class="col col-6">
                    <?= $form->field($model,'date',['template' => '{label}<label class="input">
                   <i class="icon-append fa fa-calendar"></i>{input}</label>{error}'])->textInput(['id'=>'date']) ?>
                </section>
                <section class="col col-6">
                    <?= $form->field($model,'incoming_no') ?>
                </section>
                <section class="col col-6">
                    <?= $form->field($model,'po_number') ?>
                </section>
                <section class="col col-6">
                    <?= $form->field($model,'price') ?>
                </section>
            </div>

            

        </fieldset>
        
        <footer>
            <button type="submit" class="btn btn-primary">Submit</button>
        </footer>

        <?php ActiveForm::end(); ?>
    </div>

    <div id="goodsModal" class="modal animated slideInUp" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div id="modalContent"class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 id="mdl_title" class="modal-title">Tambah Data Barang</h4>
                </div>
                <div id="modalBody" class="modal-body">
                </div>
            </div>
        </div>
    </div>

    <div id="supModal" class="modal animated slideInUp" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div id="modalContent"class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 id="mdl_title" class="modal-title">Tambah Data Barang</h4>
                </div>
                <div id="modalBody" class="modal-body">
                </div>
            </div>
        </div>
    </div>
<?php
