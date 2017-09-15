<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_details".
 *
 * @property integer $id
 * @property integer $order_id
 * @property integer $product_id
 * @property string $product_price
 * @property string $product_quantity
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Orders $order
 * @property Products $product
 */
class OrderDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'product_price', 'product_quantity', 'created_at', 'updated_at'], 'required'],
            [['order_id', 'product_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['product_price', 'product_quantity'], 'string', 'max' => 255],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['order_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'product_price' => 'Product Price',
            'product_quantity' => 'Product Quantity',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
