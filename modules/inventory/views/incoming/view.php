<?php
/**
 * Created by:
 * User: Adam
 * Date: 09/02/2020
 * Time: 2:12 PM
 */
use yii\helpers\Url;
use yii\web\View;
use yii\helpers\Html;

$this->title = Yii::t('app', 'Barang Masuk');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Monitoring Incoming]'), 'url' => Url::toRoute(['/inventory/incoming'])];
$this->params['breadcrumbs'][] = $this->title;

?>


<div class="row">

    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-6">
        <h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-handshake-o "></i>
        </h1>
    </div>


    <!-- right side of the page with the sparkline graphs -->
    <!-- col -->
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6">
        <!-- sparks -->
        <ul id="sparks">
            <li class="sparks-info .bg-color-teal">
                <?= \app\smartadmin\helpers\Html::a('<i class="fa fa-plus-circle"></i>
                    Add', \yii\helpers\Url::toRoute(['/inventory/incoming/add']), ['class' => 'btn btn-primary'])?>
            </li>

        </ul>
        <!-- end sparks -->
    </div>
    <!-- end col -->

</div>

<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget well jarviswidget-color-darken" id="wid-id-0" data-widget-sortable="false"
                 data-widget-deletebutton="false" data-widget-editbutton="false" data-widget-colorbutton="false">
                <!-- widget options:
                usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                data-widget-colorbutton="false"
                data-widget-editbutton="false"
                data-widget-togglebutton="false"
                data-widget-deletebutton="false"
                data-widget-fullscreenbutton="false"
                data-widget-custombutton="false"
                data-widget-collapsed="true"
                data-widget-sortable="false"

                -->
                <header>
                    <span class="widget-icon"> <i class="fa fa-barcode"></i> </span>
                    <h2>Incoming #<?= $model->incoming_no ?> </h2>

                </header>

                <!-- widget div-->
                <div>

                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->

                    </div>
                    <!-- end widget edit box -->

                    <!-- widget content -->
                    <div class="widget-body no-padding">

                        <div class="widget-body-toolbar">

                            <div class="row">

                                <div class="col-sm-10">
                                    <h1>Barang Masuk # <?= $model->incoming_no ?> </h1>
                                </div>

                                <div class="col-sm-2 text-align-right">
                                </div>

                            </div>

                        </div>

                        <div class="padding-10">
                            <br>

                            <div class="pull-right">
                                <h5 class="font-400"></h5>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="semi-bold"></h4>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <div class="font-md">
                                            <strong>PO Number :</strong>
                                            <span class="pull-right"> <?= $model->po_number ?> </span>
                                        </div>

                                    </div>
                                    <div>
                                        <div class="font-md">
                                            <strong>Date :</strong>
                                            <span class="pull-right"> <i
                                                        class="fa fa-calendar"></i> <?= date('d-m-Y',strtotime($model->date))?> </span>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="font-md">
                                            <strong>Item :</strong>
                                            <span class="pull-right"> <?= $model->item?> </span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-md">
                                            <strong>Categori :</strong>
                                            <span class="pull-right"> <?= $model->CategoryName?> </span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-md">
                                            <strong></strong>
                                            <span class="pull-right">  </span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="well well-sm  bg-color-darken txt-color-white no-border">
                                        <div class="fa-lg">
                                            Price :
                                            <span class="pull-right">  </span>
                                        </div>

                                    </div>
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <div>
                                <div class="font-md">
                                    <strong></strong><br>
                                    <span class="">  </span>
                                </div>

                            </div>
                            <hr>
                            

                            <div class="invoice-footer">

                                <div class="row">

                                    <div class="col-sm-7">

                                    </div>
                                    <div class="col-sm-5">
                                        <div class="invoice-sum-total pull-right">
                                            <h3><strong>Total: Rp <?= $model->getNumericFormat($model->price) ?> <span
                                                            class="text-success"></span></strong>
                                            </h3>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-8 text-align-right">
                                        <div class="btn-group">

                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= Url::toRoute(['/inventory/incoming']) ?>"
                                               class="btn btn-sm btn-primary"> <i class="fa fa-arrow-left"></i> Kembali</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="<?= Url::toRoute(['/inventory/incoming/edit', 'id' => $model->id]) ?>"
                                               class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> Edit </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- end widget content -->

                </div>
                <!-- end widget div -->

            </div>
            <!-- end widget -->

        </article>
        <!-- WIDGET END -->

    </div>

    <!-- end row -->

</section>

