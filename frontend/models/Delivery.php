<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "deliveries".
 *
 * @property integer $id
 * @property string $delivery_name
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Orders[] $orders
 */
class Delivery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deliveries';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['delivery_name', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['delivery_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'delivery_name' => 'Delivery Name',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['delivery_id' => 'id']);
    }
}
