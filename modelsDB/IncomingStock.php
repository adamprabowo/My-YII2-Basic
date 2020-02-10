<?php

namespace app\modelsDB;

use Yii;

/**
 * This is the model class for table "incoming_stock".
 *
 * @property int $id
 * @property string $incoming_no
 * @property int|null $po_id
 * @property string|null $date
 * @property float|null $total
 * @property string|null $user_id
 */
class IncomingStock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'incoming_stock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['incoming_no', 'price', 'item'], 'required'],
            [['po_id', 'category_id', 'price'], 'integer'],
            [['date'], 'safe'],
            [['incoming_no', 'po_number'], 'string', 'max' => 45],
            [['item'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Categoy Barang',
            'incoming_no' => 'Incoming No',
            'po_id' => 'Po ID',
            'date' => 'Date',
            'item' => 'Nama Barang',
            'price' => 'Harga',
            'po_number' => 'No PO'
        ];
    }

    // /**
    //  * @return \yii\db\ActiveQuery
    //  */
    // public function getCategory()
    // {
    //     return $this->hasOne(CategoriesStock::className(), ['id' => 'po_id']);
    // }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(CategoriesStock::className(), ['id' => 'category_id']);
    }
}
