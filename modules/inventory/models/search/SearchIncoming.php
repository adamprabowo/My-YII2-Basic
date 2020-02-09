<?php
/**
 * Created by .
 * User: Adam
 * Date: 09/02/2020
 * Time: 10:20 AM
 */

namespace app\modules\inventory\models\search;
use app\modules\inventory\models\Incoming;
use Yii;
use yii\db\Query;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
class SearchIncoming extends Incoming
{
    public $allField = [

        'id' => 'id',
        'incoming_no'=>'incoming_no',
        'date'=>'date',
        'item' => 'item',
        'po_number' => 'po_number',
        'price' => 'price'
    ];

    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
//            'endDate' => Yii::t('app', 'End Date'),
        ]);
    }

    public function ordering($params)
    {
        $ncol = isset($params['order'][0]['column']) ? $params['order'][0]['column'] : 0;
        $col = (isset($params['columns'][$ncol]) && array_key_exists($params['columns'][$ncol]['data'], $this->allField)) ?
            $this->allField[$params['columns'][$ncol]['data']] : '';
        $argg = isset($params['order'][0]['dir']) ? $params['order'][0]['dir'] : 'asc';
        $table = 'incoming_stock';
        
        return $col !== '' ? "$table.$col $argg " : '';
    }


    public $allData;

    public $currentData;

    /**
     * @param Query $query
     * @return int
     */
    public function calcAllData($query)
    {
        return $this->allData == null ? $query->count() : $this->allData;
    }

    /**
     * @param Query $query
     * @param $params
     * @return Query
     */
    public function defaultFilterByUser($query, $params)
    {
        return $query;
    }

    /**
     * @param $params
     * @param bool $export
     * @param bool $join
     * @return $this|\yii\db\ActiveQuery|Query
     */
    public function searchData($params, $export = false, $join = true)
    {
        $odr = $this->ordering($params);
        // $query = self::find()->joinWith(['items','barang']);
        $query = self::find();
        if (!$join)
            $query = self::find();

        $query = $this->defaultFilterByUser($query, $params);
        $query->orderBy($odr);

        $start = isset($params['start']) ? $params['start'] : 0;
        $lang = isset($params['length']) ? $params['length'] : 10;

        $table = self::tableName();

        $fltr = '';

        if (isset($params['columns']))
            foreach ($params['columns'] as $col) {
                if (isset($params['search']) && $params['search']['value'] != '') {
                    $lst[] = $col['data'];
                    if (array_key_exists($col['data'], $this->allField) &&
                        !array_key_exists($col['data'], $lst) && $this->allField[$col['data']] != '') {
                        $fltr .= $fltr != '' ? ' or ' : '';
                        $fltr .= ' `' . $table . '`.' . $this->allField[$col['data']] . " like '%" . $params['search']['value'] . "%' ";
                    }

                }

                if ($col['searchable'] == 'true' && $col['search']['value'] != '' &&
                    array_key_exists($col['data'], $this->allField)) {
                    
                        $query->andFilterWhere(['like', '`' . $table . '`.' . $this->allField[$col['data']], $col['search']['value']]);
                }
            }

        $query->andWhere($fltr);
        $this->load($params);

        if ($export) {
            return $query;
        }

        $this->currentData = $query->count();

        $query->limit($lang)->offset($start);
        return $query;
    }

    /**
     * @param $params
     * @return mixed
     */
    public function searchDataTable($params)
    {
        $data = $this->searchData($params);
             return Json::encode([
            "draw" => isset ($params['draw']) ? intval($params['draw']) : 0,
            "recordsTotal" => intval($this->allData),
            "recordsFiltered" => intval($this->currentData),
            "data" => $this->renderData($data, $params),
        ]);
    }
    /**
     * @param $query Query
     * @param $params
     * @return array
     */
    public function renderData($query, $params)
    {
        $out = [];

        /** @var self $model */
        foreach ($query->all() as $model) {
            $out[] = array_merge(ArrayHelper::toArray($model), array(
                'action'=>$model->action,
                'date'=>$model->date=='0000-00-00 00:00:00' ?' ':date('d-m-Y',strtotime($model->date)),
                'po_number'=>$model->po_number,
                'item'=>$model->item,
                'price'=>$model->price
            ));

        }
        return $out;
    }
}