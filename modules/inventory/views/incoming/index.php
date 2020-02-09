<?php

use app\smartadmin\Alert;
use yii\helpers\Url;
use app\smartadmin\assets\plugins\DataTableAsset;
DataTableAsset::register($this);
$this->title = Yii::t('app', 'Incoming');
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Monitoring Barang Masuk'), 'url' => Url::toRoute(['/inventory/request-order/'])];
?>
    <!-- Bread crumb is created dynamically -->
    <!-- row -->
    <div class="row">

        <!-- col -->
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
            <h2 class="page-title txt-color-blueDark">

                <!-- PAGE HEADER -->
                <i class="glyphicon glyphicon-book"></i>
                <?= $this->title ?>
            </h2>
        </div>
        <!-- end col -->

        <!-- right side of the page with the sparkline graphs -->
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
            <!-- sparks -->
            <ul id="sparks">
                <?= \app\smartadmin\helpers\Html::a('<i class="fa fa-plus-circle"></i>
                    Add', Url::toRoute(['/inventory/incoming/add']), ['class' => 'btn btn-primary']) ?>
            </ul>
            <!-- end sparks -->
        </div>
        <!-- end col -->

    </div>
    <!-- end row -->

    <!--
        The ID "widget-grid" will start to initialize all widgets below
        You do not need to use widgets if you dont want to. Simply remove
        the <section></section> and you can use wells or panels instead
        -->

    <!-- widget grid -->
    <section id="widget-grid" class="">

        <!-- row -->
        <div class="row">

            <!-- NEW WIDGET START -->
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-editbutton="false">
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
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2>Data  </h2>
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

                            <table id="tblIn" class="display table table-striped table-bordered  table-responsive" width="100%">
                                <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Incoming No</th>
                                    <th>Date</th>
                                    <th>PO No</th>
                                    <th>Item</th>
                                    <th>Harga</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
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

        <!-- row -->

        <div class="row">

            <!-- a blank row to get started -->
            <div class="col-sm-12">
                <!-- your contents here -->
            </div>

        </div>

        <!-- end row -->

    <?php
$url=Url::toRoute(['/inventory/incoming']);

$jsCode = <<< JS
$(function () {
    
     var urlVal='',
         rowIndex=0,
         cll,kd;
     var lop=0;   
     var mdl=$('#validModal').modal({
            show:false,
            keyboard:false,
            backdrop:'static'
            
     });
     var tbl=$('#tblIn').DataTable( {
        "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>" +
        "t" +
        "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ajax": '{$url}',
        "columns": [
            { "data": "action"},
            { "data": "incoming_no"},
            { "data": "date"},
            { "data": "po_number"},
            { "data": "item"},
            { "data": "price"},
        ],
        "order": [[1, "desc"]],
    });
})
JS;
$this->registerJs($jsCode, 4, 'aaa');
