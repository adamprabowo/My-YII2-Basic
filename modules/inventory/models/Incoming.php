<?php
/**
 * Created by:
 * User: Adam
 * Date: 09/02/2020
 * Time: 11:05 AM
 */

namespace app\modules\inventory\models;

use app\modelsDB\IncomingStock;
use Yii;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Incoming extends IncomingStock
{
    public $_ditem = [];
    public $total=0;
//    protected $expreqno=[];
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'po_id'=> Yii::t('app', 'No PO'),
        ]);
    }
    public function getAction()
    {
        /** @var TYPE_NAME $out */
        $out=Html::tag('a','<i class="fa fa-edit"></i>', ['class' =>'btn btn-default btn-xs','title'=>'Edit','href'=> Url::toRoute(["/inventory/incoming/edit","id"=>$this->id]),])
                 . Html::tag('a','<i class="fa fa-laptop"></i>', ['class' =>'btn btn-default btn-xs','title'=>'View','href'=> Url::toRoute(["/inventory/incoming/view","id"=>$this->id]),])
                .Html::tag('a','<i class="fa  fa-trash-o"></i>', ['class'=>'btn btn-default btn-xs','title'=>'Delete','href'=>Url::toRoute(["/inventory/incoming/del","id"=>$this->id]),'data-method' => 'post', 'data-confirm' => 'Are you absolutely sure ? You will lose all the information about this user with this action.',]);

        return $out;
    }

    public function getCategoryName()
    {
        if($this->category!==null){
            $cat=$this->category->description;
        }else{
            $cat='';
        }
        return $cat;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function inNumber()
    {
        $number = self::find()->max('incoming_no');
        if (empty($number)) {
            return '0001/IN-GA/jkt/XII/'.date('y');
        }else{
            $number = (int)substr($number ,0,4)+ 1;
            $number=str_pad($number, 4, '0', STR_PAD_LEFT);
            return  $number.'/IN-GA/jkt/XII/'.date('y');
        }
    }
    
    public function getNumericFormat($num){
        $value=number_format($num,0,',','.');
        return $value;
    }
    
    public  function AddInventory($stock_id,$date,$qty,$remark)
    {
        $model=new InventoryStocks(['stock_id'=>$stock_id,'date'=>$date,'incoming'=>$qty,'remark'=>$remark]);
        $out=$model->save();
        return $out;
    }
    
    protected function marge($a, $b)
    {
        $out = [];

        $all = ArrayHelper::merge($a, $b);
        foreach ($all as $inItems) {
            $out[$inItems->id] = $inItems;
        }
        return $out;
    }



}